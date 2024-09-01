<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\Smtp\WaitingListNotification;

class ReservationWaitingController extends Controller
{
    public function __invoke(Reservation $reservation)
    {
        try {

            DB::beginTransaction();
            $reservation->update(['status' => Reservation::WAITING_STATUS]);
            $reservation->notify(new WaitingListNotification($reservation));
            DB::commit();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Updating status succesfully',
                    'redirect' => route('admin.reservation.show', $reservation->id)
                ]
            );
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }
}
