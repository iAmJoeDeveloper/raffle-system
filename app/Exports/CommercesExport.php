<?php

namespace App\Exports;

use App\Commerce;
use Maatwebsite\Excel\Concerns\FromCollection;

class CommercesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Commerce::all();
    }
}
