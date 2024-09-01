<?php

namespace App\Exports;

use App\Enums\IndustryEnum;
use App\Enums\IndustryNameEnum;
use App\Enums\JobTitleEnum;
use App\Enums\MajorEnum;
use App\Enums\VisitorTypeEnum;
use App\Models\Reservation;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReservationExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $status, $start_date, $end_date,$attendance,$type;
    public function __construct($status = null, $start_date = null, $end_date = null,$attendance=null,$type=null)
    {
        $this->status = $status;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->attendance = $attendance;
        $this->type = $type;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Reservation::query()
            ->when(in_array($this->status, [Reservation::PENDING_STATUS, Reservation::APPROVED_STATUS, Reservation::REJECTED_STATUS]), function ($query) {
                $query->where('status', $this->status);
            })
            ->when($this->start_date && $this->end_date, function ($query) {
                $query->whereBetween('created_at', [$this->start_date . " 00:00:00", $this->end_date . " 23:59:59"]);
            })
            ->when($this->start_date && !$this->end_date, function ($query) {
                $query->whereBetween('created_at', [$this->start_date . " 00:00:00", date('Y-m-d') . " 23:59:59"]);
            })
            ->when(!$this->start_date && $this->end_date, function ($query) {
                $query->whereBetween('created_at', [date('Y-m-d') . " 00:00:00", $this->end_date . " 23:59:59"]);
            })
            ->when($this->attendance == true, function ($query) {
                $query->where('is_confirmed', true);
            })
            ->when($this->attendance == false, function ($query) {
                $query->where('is_confirmed', false);
            })
            ->when($this->type, function ($query) {
                $query->where('type', $this->type);
            })
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($reservation, $index) {

                return [
                    'no' => $index + 1,
                    'reservation_code' => $reservation->reservation_code,
                    'firstname' => $reservation?->firstname ?? '-',
                    'lastname' => $reservation?->lastname ?? '-',
                    'email' => $reservation?->email ?? '-',
                    'phone' => $reservation?->phone ?? '-',
                    'job_title' => $reservation->job_title ? JobTitleEnum::getNameByValue($reservation->job_title) : '-',
                    'company_name' => $reservation?->company_name ?? '-',
                    'company_industry' => $reservation->company_industry ? IndustryNameEnum::getNameByValue($reservation->company_industry) : '-',
                    'university_name' => $reservation?->university_name ?? '-',
                    'major' => $reservation->major ? MajorEnum::getNameByValue($reservation->major) : '-',
                    'other_industry_major' => $reservation->company_major_custom ?? '-',
                    'interest' => $reservation->interest_text ?? '-',
                    'date' => $reservation->created_at->translatedFormat('d-m-Y H:i:s'),
                    'type' => Reservation::TYPE[$reservation?->type],
                    'status' => Reservation::RESERVATION_STATUS[$reservation?->status],
                    'attendance' => $reservation->is_confirmed ? 'Confirmed' : 'Not Confirmed',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'No',
            'User ID',
            'Firstname',
            'Lastname',
            'Email',
            'Phone',
            'Job Title',
            'Company Name',
            'Company Industry',
            'University Name',
            'Major',
            'Other Company Industry or Major',
            'Why are you interested in joining this event?',
            'Registration Date',
            'Job Sector',
            'Status',
            'Attendance',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
    }
}
