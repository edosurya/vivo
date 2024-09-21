<?php

namespace App\Exports;

use App\Models\Creator;
use App\Models\Images;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImagesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{

    public function __construct($category=null)
    {
        $this->category = $category;
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Images::all();
    }
}
