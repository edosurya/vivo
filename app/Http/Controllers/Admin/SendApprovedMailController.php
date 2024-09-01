<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ApprovalNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Channels\MailtrapChannel;
use App\Notifications\Smtp\ApprovedNotification;
use App\Notifications\ApprovalWithQrCodeNotification;
use Illuminate\Support\Facades\DB;

class SendApprovedMailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            DB::beginTransaction();
            $reservationIds = explode(',', $request->reservation_id);
            if (count($reservationIds) > 20) {
                return response()->json(['success' => false, 'message' => 'Max 20 data']);
            }
            $redirect = null;
            if (count($reservationIds) > 1) {
                $reservations = Reservation::whereIn('id', $reservationIds)
                    ->where('status', '<>', Reservation::REJECTED_STATUS)
                    ->get();
                foreach ($reservations as $key => $reservation) {
                    $this->sendNotification($reservation);
                }
            } else {
                $reservation = Reservation::where('id', $reservationIds[0])
                    ->where('status', '<>', Reservation::REJECTED_STATUS)
                    ->first();
                if ($reservation) {
                    $this->sendNotification($reservation);
                    $redirect = route('admin.reservation.show', $reservation->id);
                } else {
                    return response()->json(['success' => false, 'message' => 'This reservation is rejected, only approved can send this mail']);
                }
            }
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Mail has been send', 'redirect' => $redirect]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    private function sendNotification($reservation)
    {
        try {
            $receipents = [
                [
                    'email' => $reservation->email,
                ],
            ];

            $dayH6 = Carbon::parse(config('services.event.date'))->subDays(6)->format('Y-m-d');
            $dayH5 = Carbon::parse(config('services.event.date'))->subDays(5)->format('Y-m-d');
            $dayH4 = Carbon::parse(config('services.event.date'))->subDays(4)->format('Y-m-d');
            $dayH3 = Carbon::parse(config('services.event.date'))->subDays(3)->format('Y-m-d');
            $dayH2 = Carbon::parse(config('services.event.date'))->subDays(2)->format('Y-m-d');
            $dayH1 = Carbon::parse(config('services.event.date'))->subDays(1)->format('Y-m-d');

            $createdAt = Carbon::parse($reservation->created_at)->format('Y-m-d');

            if ($dayH6 == $createdAt || $dayH5 == $createdAt || $dayH4 == $createdAt || $dayH3 == $createdAt || $dayH2 == $createdAt || $dayH1 == $createdAt) {
                $variables = [
                    'user_name' => $reservation->fullname,
                    'url_confirmation' => route('reservation.confirmation', ['code' => $reservation->code]),
                ];

                Notification::route(MailtrapChannel::class, 'send approved qr code email')->notify(new ApprovalWithQrCodeNotification($receipents, $variables));
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
        return $encodedUrl;
    }
}
