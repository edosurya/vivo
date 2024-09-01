<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use App\Enums\JobTitleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\StoreReservationRequest;
use Spatie\Newsletter\Facades\Newsletter;
use App\Notifications\Channels\MailtrapChannel;
use App\Notifications\Smtp\WelcomeNotification;
// use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;
use Ramsey\Uuid\Uuid;

class ReservationController extends Controller
{
    protected $is_university_jobs;
    public function __construct()
    {
        // if (!config('services.event.is_launch')) {
        //     return abort(403);
        // }

        $this->is_university_jobs = [JobTitleEnum::STD->value, JobTitleEnum::ARS->value];
        // $this->is_university_jobs = [JobTitleEnum::STD->value, JobTitleEnum::ARS->value, JobTitleEnum::AOC->value, JobTitleEnum::SEM->value];
    }

    public function index()
    {
        $reservation = new Reservation();
        $job_titles = $reservation->getJobTitlesAttribute();
        $majors = $reservation->getMajorTypesAttribute();
        $industries = $reservation->getIndustryNamesAttribute();
        $is_university_jobs = $this->is_university_jobs;
        $dial_codes = json_decode(file_get_contents('json/dial_code.json'), true);
        $conversionId = '11049421826';
        $conversionLabel = 'HY5jCIeKjMgZEIKY45Qp';
        $conversionSubmitLabel = 'HY5jCIeKjMgZEIKY45Qp';
        return view('frontend.reservation', compact('industries', 'job_titles', 'majors', 'is_university_jobs', 'dial_codes','conversionId', 'conversionLabel','conversionSubmitLabel'));
    }

    public function store(StoreReservationRequest $request)
    {
        try {
            DB::beginTransaction();
            if (config('services.mailchimp.is_active')) {
                Newsletter::subscribe($request->email, ['FNAME' => $request->firstname, 'LNAME' => $request->lastname]);
            }

            if (in_array($request->job_title, $this->is_university_jobs)) {
                $type = Reservation::EDUCATION;
            } else {
                $type = Reservation::COMPANY;
            }

            $reservation = Reservation::create([
                'code' => Uuid::uuid4()->toString(),
                'fullname' => $request->firstname . ' ' . $request->lastname,
                'phone' => $request->dial_code . '' . $request->phone,
                'type' => $type,
                'email' => strtolower($request->email),
                ...$request->except('dial_code', 'phone', 'g-recaptcha-response', 'email'),
            ]);

            DB::commit();

            // send email, when reservation created
            if ($reservation) {
                // $receipents = [
                //     [
                //         'email' => $request->email
                //     ]
                // ];

                // $variables = [
                //     'user_name' => $reservation->fullname,
                //     'reservation_type' => $type == Reservation::EDUCATION ? 'Nama Universitas' : 'Nama Perusahaan',
                //     'reservation_type_en' => $type == Reservation::EDUCATION ? 'University Name' : 'Company Name',
                //     'type_value' =>  $type == Reservation::EDUCATION ? $reservation->university_name : $reservation->company_name,
                //     'job_title_id' => JobTitleEnum::tryFrom($request->job_title)->descriptionWithLang('id'),
                //     'job_title_en' => JobTitleEnum::tryFrom($request->job_title)->descriptionWithLang('en'),
                //     'user_email' => $reservation->email,
                // ];

                // Notification::route(MailtrapChannel::class, 'send email welcome')->notify(
                //     new WelcomeNotification(config('services.mailtrap.template.welcome'), $receipents, $variables)
                // );

                $reservation->notify(new WelcomeNotification($reservation));
            }

            return response()->json(['success' => true, 'message' => 'Reservation created successfully', 'with_toastr' => false]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    public function show()
    {
        return view('frontend.reservation_completed');
    }
}
