<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\Smtp\RejectedNotification;

class SendRejectedMailController extends Controller
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
            if(count($reservationIds) > 1){
                $reservations = Reservation::whereIn('id',$reservationIds)->where('status','<>',Reservation::APPROVED_STATUS)->get();
                foreach ($reservations as $key => $reservation) {
                    $reservation->notify(new RejectedNotification($reservation));
                }
            }else{
                $reservation = Reservation::where('id',$reservationIds[0])->where('status','<>',Reservation::APPROVED_STATUS)->first();
                if($reservation){
                    $reservation->notify(new RejectedNotification($reservation));
                    $redirect = route('admin.reservation.show',$reservation->id);
                }else{
                    return response()->json(['success' => false, 'message' => 'This reservation is approved, only rejected can send this mail']);
                }
            }
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Mail has been send', 'redirect' => $redirect]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }
}
