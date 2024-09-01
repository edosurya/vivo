<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Exports\ContactUsExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ContactUsExportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $filename = 'Contact_us_list';
        if ($request->start_date) $filename .= '_' . $request->start_date;
        if ($request->end_date) $filename .= '_' . $request->end_date;
        $filename .= '.xlsx';

        return Excel::download(
            new ContactUsExport(
                $request?->filter_start_date,
                $request?->filter_end_date,
            ),
            $filename,
            \Maatwebsite\Excel\Excel::XLSX
        );
    }
}
