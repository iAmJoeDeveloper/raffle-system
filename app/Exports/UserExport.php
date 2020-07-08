<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select("name", "lastName", "email", "bornDate", "sex", "documentType", "documentType", "documentNumber", "phone")->get();
    }
}
