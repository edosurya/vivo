<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $eventDate = Carbon::parse(config('services.event.date'))
            ->subDays(14)
            ->format('Y-m-d');

        if ($request->ajax()) {
            try {
                $query = ContactUs::query()
                    ->when($request->filter_start_date && $request->filter_end_date, function ($query) use ($request) {
                        $query->whereBetween('created_at', [$request->filter_start_date . " 00:00:00", $request->filter_end_date . " 23:59:59"]);
                    })
                    ->when($request->filter_start_date && !$request->filter_end_date, function ($query) use ($request) {
                        $query->where('created_at', '>=', $request->filter_start_date . " 00:00:00");
                    })
                    ->when(!$request->filter_start_date && $request->filter_end_date, function ($query) use ($request) {
                        $query->where('created_at', '<=', $request->filter_end_date . " 23:59:59");
                    })
                    ->select('contacts.*');
                return datatables()->eloquent($query)
                    ->addColumn('created_at', function ($row) {
                        return $row->created_at->translatedFormat('d-m-Y H:i:s');
                    })->toJson();
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

        return view('admin.contact_us.index');
    }
}
