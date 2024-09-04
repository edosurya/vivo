<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Creator;
use App\Models\Images;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            try {
                $query = Creator::query()
                    ->when($request->filter_start_date && $request->filter_end_date, function ($query) use ($request) {
                        $query->whereBetween('created_at', [$request->filter_start_date . " 00:00:00", $request->filter_end_date . " 23:59:59"]);
                    })
                    ->when($request->filter_start_date && !$request->filter_end_date, function ($query) use ($request) {
                        $query->where('created_at', '>=', $request->filter_start_date . " 00:00:00");
                    })
                    ->when(!$request->filter_start_date && $request->filter_end_date, function ($query) use ($request) {
                        $query->where('created_at', '<=', $request->filter_end_date . " 23:59:59");
                    })
                    ->when($request->filter_category, function ($query) use ($request) {
                        $query->where('category', $request->filter_category);
                    })
                    ->select('creators.*');
                return datatables()
                    ->eloquent($query)
                    ->addColumn('created_at', function ($row) {
                        $explode = explode(' ', $row->created_at->translatedFormat('d-m-Y H:i:s'));
                        return $explode[0] . '<br>' . $explode[1];
                    })
                    ->addColumn('device', function ($row) {
                        return Creator::TYPE[$row->device];
                    })
                    ->addColumn('category', function ($row) {
                        return Images::TYPE[$row->category];
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

        $creators = new Creator();
        return view('admin.creator.index', compact('creators'));
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
    public function show(string $id)
    {
        //
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
