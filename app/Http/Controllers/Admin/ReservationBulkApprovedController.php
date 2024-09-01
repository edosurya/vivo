<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Qrcode;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Notifications\ApprovalNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Channels\MailtrapChannel;
use App\Notifications\Smtp\ApprovedNotification;
use App\Notifications\ApprovalWithQrCodeNotification;
use SimpleSoftwareIO\QrCode\Facades\QrCode as SimpleSoftwareIOQrCode;

class ReservationBulkApprovedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            DB::beginTransaction();

            if (empty($request->reservation_id)) {
                return response()->json(['success' => false, 'message' => 'No data selected']);
            }

            $requestId = explode(',', $request->reservation_id);
            if (count($requestId) > 20) {
                return response()->json(['success' => false, 'message' => 'Max 20 data']);
            }
            // return $requestId;

            $urlGoogleCalndar = $this->setUrlGooleCalendar();

            $reservations = Reservation::whereIn('id', $requestId)->get();

            foreach ($reservations as $key => $reservation) {
                // update status reservation
                $reservation->update(['status' => Reservation::APPROVED_STATUS]);

                // generate QRCode and save to storage and database
                $qrcodeExtension = config('services.qrcode.extension');
                $originalData = $reservation->email . '_' . $reservation->created_at . '_' . $reservation::RESERVATION_STATUS[$reservation->status];
                $hash = md5($originalData);
                $generated_qrcode = SimpleSoftwareIOQrCode::format($qrcodeExtension)
                    ->size(100)
                    ->generate(config('app.url') . '/' . $hash . '/check');
                $fullpath = config('app.env') . '/qrcode/' . $hash . '.' . $qrcodeExtension;
                Storage::put($fullpath, $generated_qrcode);

                Qrcode::create([
                    'hash' => $hash,
                    'reservation_id' => $reservation->id,
                    'original' => $originalData,
                    'path' => $fullpath,
                ]);

                // Send Mail Approved
                $this->sendNotification($reservation, $urlGoogleCalndar);
            }
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Success approve all checked data',
                'redirect' => route('admin.reservation.index')
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }



    /**
     * Send Notification
     * @param Reservation $reservation
     * @param string $urlGoogleCalndar
     * @return void
     */
    private function sendNotification($reservation, $urlGoogleCalndar)
    {
        try {
            $receipents = [
                [
                    'email' => $reservation->email
                ]
            ];

            $dayH6 = Carbon::parse(config('services.event.date'))
                ->subDays(6)
                ->format('Y-m-d');
            $dayH5 = Carbon::parse(config('services.event.date'))
                ->subDays(5)
                ->format('Y-m-d');
            $dayH4 = Carbon::parse(config('services.event.date'))
                ->subDays(4)
                ->format('Y-m-d');
            $dayH3 = Carbon::parse(config('services.event.date'))
                ->subDays(3)
                ->format('Y-m-d');
            $dayH2 = Carbon::parse(config('services.event.date'))
                ->subDays(2)
                ->format('Y-m-d');
            $dayH1 = Carbon::parse(config('services.event.date'))
                ->subDays(1)
                ->format('Y-m-d');

            $createdAt = Carbon::parse($reservation->created_at)->format('Y-m-d');

            if (
                $dayH6 == $createdAt || $dayH5 == $createdAt || $dayH4 == $createdAt || $dayH3 == $createdAt || $dayH2 == $createdAt || $dayH1 == $createdAt
            ) {
                $variables = [
                    'user_name' => $reservation->fullname,
                    'url_confirmation' => route('reservation.confirmation', ['code' => $reservation->code])
                ];

                Notification::route(MailtrapChannel::class, 'send approved qr code email')->notify(
                    new ApprovalWithQrCodeNotification($receipents, $variables)
                );
            } else {
                // $variables = [
                //     'user_name' => $reservation->fullname,
                //     'google_calendar_url' => $urlGoogleCalndar,
                // ];

                // Notification::route(MailtrapChannel::class, 'send approved email')->notify(
                //     new ApprovalNotification(Reservation::APPROVED_STATUS, $receipents, $variables)
                // );

                $reservation->notify(new ApprovedNotification($reservation, $urlGoogleCalndar));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /**
     * Set Url Google Calendar
     * @return string
     */
    private function setUrlGooleCalendar()
    {
        $calendarUrl = config('services.calendar_setting.url');
        $params = [
            'action' => 'TEMPLATE',
            'dates' => config('services.calendar_setting.start_date') . '/' . config('services.calendar_setting.end_date'),
            'details' => config('services.calendar_setting.description'),
            'location' => config('services.calendar_setting.location'),
            'text' => config('services.calendar_setting.title'),
        ];

        if ($calendarUrl && $params) {
            $encodedParams = array_map(
                function ($key, $value) {
                    return urlencode($key) . '=' . rawurlencode($value);
                },
                array_keys($params),
                $params,
            );
            $encodedUrl = $calendarUrl . '?' . implode('&', $encodedParams);
        } else {
            $encodedUrl = $calendarUrl;
        }
        return  $encodedUrl;
    }
}
