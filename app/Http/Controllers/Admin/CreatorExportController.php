<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Exports\CreatorExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Model\Images;

class CreatorExportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $filename = 'Creator_list';
        if ($request->start_date) $filename .= '_' . $request->start_date;
        if ($request->end_date) $filename .= '_' . $request->end_date;
        if ($request->category) $filename .= '_' . Images::TYPE[$request->category];
        $filename .= '.xlsx';

        return Excel::download(
            new CreatorExport(
                $request?->filter_start_date,
                $request?->filter_end_date,
                $request?->filter_category,
            ),
            $filename,
            \Maatwebsite\Excel\Excel::XLSX
        );
    }
}
