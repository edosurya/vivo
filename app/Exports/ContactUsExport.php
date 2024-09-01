<?php

namespace App\Exports;

use App\Models\ContactUs;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ContactUsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $start_date, $end_date;
    public function __construct($start_date = null, $end_date = null)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ContactUs::query()
            ->when($this->start_date && $this->end_date, function ($query) {
                $query->whereBetween('created_at', [$this->start_date . " 00:00:00", $this->end_date . " 23:59:59"]);
            })
            ->when($this->start_date && !$this->end_date, function ($query) {
                $query->whereBetween('created_at', [$this->start_date . " 00:00:00", date('Y-m-d') . " 23:59:59"]);
            })
            ->when(!$this->start_date && $this->end_date, function ($query) {
                $query->whereBetween('created_at', [date('Y-m-d') . " 00:00:00", $this->end_date . " 23:59:59"]);
            })
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($contactUs, $index) {
                return [
                    'no' => $index + 1,
                    'created_at' => $contactUs->created_at->translatedFormat('d-m-Y H:i:s'),
                    'fullname' => $contactUs?->fullname ?? '-',
                    'email' => $contactUs?->email ?? '-',
                    'company_name' => $contactUs?->company_name ?? '-',
                    'message' => $contactUs?->message ?? '-',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'No',
            'Date',
            'Fullname',
            'Email',
            'Company Name',
            'Message'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
    }
}
