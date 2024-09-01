<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\Smtp\ReminderH14Notification;
use Illuminate\Support\Facades\DB;

class SendH14MailController extends Controller
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

            if(count($reservationIds) > 1){
                $reservations = Reservation::whereIn('id',$reservationIds)->get();
                foreach ($reservations as $key => $reservation) {
                    $reservation->notify(new ReminderH14Notification($reservation));
                }
                $redirect = null;
            }else{
                $reservation = Reservation::findOrFail($reservationIds[0]);
                $reservation->notify(new ReminderH14Notification($reservation));
                $redirect = route('admin.reservation.show',$reservation->id);
            }
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Mail has been send', 'redirect' => $redirect]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }
}
