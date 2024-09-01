<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\Smtp\WaitingListNotification;

class ReservationBulkWaitingController extends Controller
{


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

            foreach ($reservations as $reservation) {
                $reservation->update(['status' => Reservation::WAITING_STATUS]);
                $reservation->notify(new WaitingListNotification($reservation));
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
}
