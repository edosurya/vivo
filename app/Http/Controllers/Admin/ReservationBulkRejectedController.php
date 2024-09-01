<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Notifications\ApprovalNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Channels\MailtrapChannel;
use App\Notifications\Smtp\RejectedNotification;
use App\Notifications\Smtp\ReallocatedNotification;
use App\Notifications\RejectedReservationNotification;

class ReservationBulkRejectedController extends Controller
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

            $reservations = Reservation::whereIn('id',  $requestId)->get();

            foreach ($reservations as $key => $reservation) {

                if ($reservation->status == Reservation::APPROVED_STATUS && $reservation->is_confirmed == true) {
                    continue;
                }

                // when current status is waiting, and user change status to rejected, then send email rejected reservation
                if ($reservation->status == Reservation::WAITING_STATUS) {
                    $reservation->update(['status' => Reservation::REJECTED_STATUS]);
                    $reservation->notify(new RejectedNotification($reservation));
                }

                // when current status is approved, and user change status to rejected, then send email rejected reallocated status 
                else if ($reservation->status == Reservation::APPROVED_STATUS) {
                    $reservation->notify(new ReallocatedNotification($reservation));
                    $reservation->update(['status' => Reservation::REALLOCATED_STATUS]);
                }
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
     * @return void|\Throwable
     */
    // private function sendNotification($reservation)
    // {
    //     try {
    //         // $receipents = [
    //         //     [
    //         //         'email' => $reservation->email
    //         //     ]
    //         // ];

    //         // $variables = [
    //         //     'user_name' => $reservation->fullname,
    //         // ];

    //         // Notification::route(MailtrapChannel::class, 'send rejected reservation')->notify(
    //         //     new ApprovalNotification(Reservation::REJECTED_STATUS, $receipents, $variables)
    //         // );

    //         $reservation->notify(new RejectedNotification($reservation));
    //     } catch (\Throwable $th) {
    //         throw $th;
    //     }
    // }
}
