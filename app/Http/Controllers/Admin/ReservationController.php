<?php

namespace App\Http\Controllers\Admin;

use App\Enums\JobTitleEnum;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        dd('ss');
        if ($request->ajax()) {
            try {
                $query = Reservation::query()
                    ->when($request->filter_status, function ($query) use ($request) {
                        $query->where('status', $request->filter_status);
                    })
                    ->when($request->filter_start_date && $request->filter_end_date, function ($query) use ($request) {
                        $query->whereBetween('created_at', [$request->filter_start_date . " 00:00:00", $request->filter_end_date . " 23:59:59"]);
                    })
                    ->when($request->filter_start_date && !$request->filter_end_date, function ($query) use ($request) {
                        $query->where('created_at', '>=', $request->filter_start_date . " 00:00:00");
                    })
                    ->when(!$request->filter_start_date && $request->filter_end_date, function ($query) use ($request) {
                        $query->where('created_at', '<=', $request->filter_end_date . " 23:59:59");
                    })
                    ->when(!empty($request->filter_attendance), function ($query) use ($request) {
                        $query->where('is_confirmed', '=', $request->filter_attendance == "confirmed" ? 1 : 0);
                    })
                    ->when($request->filter_type, function ($query) use ($request) {
                        $query->where('type', $request->filter_type);
                    })
                    ->select('reservations.*');
                return datatables()
                    ->eloquent($query)
                    ->addColumn('status', function ($row) {
                        $color = Reservation::RESERVATION_STATUS_COLOR[$row->status];
                        $text = Reservation::RESERVATION_STATUS[$row->status];
                        return [
                            'text' => $text,
                            'color' => $color
                        ];
                    })
                    ->addColumn('reservation_type', function ($row) {
                        return Reservation::TYPE[$row->type];
                    })
                    ->addColumn('created_at', function ($row) {
                        $explode = explode(' ', $row->created_at->translatedFormat('d-m-Y H:i:s'));
                        return $explode[0] . '<br>' . $explode[1];
                    })
                    ->escapeColumns([])
                    ->toJson();
            } catch (\Throwable $th) {
                return response([
                    'draw' => 0,
                    'recordsTotal' => 0,
                    'recordsFiltered' => 0,
                    'data' => [],
                    'error' => $th->getMessage(),
                ]);
            }
        }

        $reservation = new Reservation();
        return view('admin.reservation.index', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {

        $reservation->loadMissing('relatedQrcode', 'relatedHistories');
        $is_university_jobs = [JobTitleEnum::STD->value, JobTitleEnum::ARS->value];

        // return $reservation;
        return view('admin.reservation.show', compact('reservation', 'is_university_jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
