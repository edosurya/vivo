<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Qrcode;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Notifications\ApprovalNotification;
use App\Notifications\ApprovalWithQrCodeNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Channels\MailtrapChannel;
use App\Notifications\Smtp\ApprovedNotification;
use App\Notifications\Smtp\ApproveH6Notification;
use SimpleSoftwareIO\QrCode\Facades\QrCode as SimpleSoftwareIOQrCode;

class ReservationApprovedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Reservation $reservation)
    {
        try {
            DB::beginTransaction();
            //update status reservation
            $reservation->update(['status' => Reservation::APPROVED_STATUS]);

            // // generate QRCode and save to storage and database
            $originalData = $reservation->email . '_' . $reservation->created_at . '_' . $reservation::RESERVATION_STATUS[$reservation->status];

            $originalExtension = config('services.qrcode.extension');
            $hash = md5($originalData);
            $generated_qrcode = SimpleSoftwareIOQrCode::format($originalExtension)
                ->size(100)
                ->generate(config('app.url') . '/' . $hash . '/check');
            $fullpath = config('app.env') . '/qrcode/' . $hash . '.' . $originalExtension;
            Storage::put($fullpath, $generated_qrcode);

            Qrcode::create([
                'hash' => $hash,
                'reservation_id' => $reservation->id,
                'original' => $originalData,
                'path' => $fullpath,
            ]);

            // Send Mail Approved
            $this->sendNotification($reservation);
            DB::commit();

            // $reservation['qrcode'] = $qrcode->full_path_url;
            // $reservation->notify(new ApprovedReservationNotification('Your data has been approved'));

            return response()->json(['success' => true, 'message' => 'Updating status succesfully', 'redirect' => route('admin.reservation.show', $reservation->id)]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(
                [
                    'success' => false, 'message' => $th->getMessage()
                ]
            );
        }
    }

    private function sendNotification($reservation)
    {
        try {
            // $receipents = [
            //     [
            //         'email' => $reservation->email
            //     ]
            // ];

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
                // $variables = [
                //     'user_name' => $reservation->fullname,
                //     'url_confirmation' => route('reservation.confirmation', ['code' => $reservation->code])
                // ];

                // Notification::route(MailtrapChannel::class, 'send approved qr code email')->notify(
                //     new ApprovalWithQrCodeNotification($receipents, $variables)
                // );

                $reservation->notify(new ApproveH6Notification($reservation));
            } else {
                // $variables = [
                //     'user_name' => $reservation->fullname,
                //     'google_calendar_url' => $this->setUrlGooleCalendar(),
                // ];

                // Notification::route(MailtrapChannel::class, 'send approved email')->notify(
                //     new ApprovalNotification(Reservation::APPROVED_STATUS, $receipents, $variables)
                // );

                $reservation->notify(new ApprovedNotification($reservation, $this->setUrlGooleCalendar()));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }


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
