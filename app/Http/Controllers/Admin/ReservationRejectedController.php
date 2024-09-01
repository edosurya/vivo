<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ApprovalNotification;
use App\Notifications\Channels\MailtrapChannel;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Notifications\Smtp\ReallocatedNotification;
use App\Notifications\Smtp\RejectedNotification;

class ReservationRejectedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Reservation $reservation)
    {
        try {


            DB::beginTransaction();

            // when current status is waiting, and user change status to rejected, then send email rejected reservation
            if ($reservation->status == Reservation::WAITING_STATUS) {
                $reservation->update(['status' => Reservation::REJECTED_STATUS]);
                $reservation->notify(new RejectedNotification($reservation));
                // notify email rejected
            }

            // when current status is approved, and user change status to rejected, then send email rejected reallocated status
            else if ($reservation->status == Reservation::APPROVED_STATUS) {
                $reservation->notify(new ReallocatedNotification($reservation));
                $reservation->update(['status' => Reservation::REALLOCATED_STATUS]);
            }
            DB::commit();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Updating status succesfully',
                    'redirect' => route(
                        'admin.reservation.show',
                        $reservation->id
                    )
                ]
            );
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

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
