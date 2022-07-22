<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements FromCollection, ShouldAutoSize 
{
    use Exportable;
    

    public function collection()
    {
        return User::all();
    }
}
