<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Exports\ReservationExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ReservationExportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $filename = 'Reservation_list';
        if ($request->status) $filename .= '_' . Reservation::RESERVATION_STATUS[$request->status];
        if ($request->start_date) $filename .= '_' . $request->start_date;
        if ($request->end_date) $filename .= '_' . $request->end_date;
        if ($request->is_confirmed) $filename .= '_' . ($request->is_confirmed ? 'Confirmed' : 'Not_Confirm');
        if ($request->type) $filename .= '_' . Reservation::TYPE[$request->type];
        $filename .= '.xlsx';

        return Excel::download(
            new ReservationExport(
                $request?->filter_status,
                $request?->filter_start_date,
                $request?->filter_end_date,
                $request->is_confirmed,
            $request->type
            ),
            $filename,
            \Maatwebsite\Excel\Excel::XLSX
        );
    }
}
