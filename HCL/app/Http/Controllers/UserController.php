<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Models\User;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel;
use PDF;

class UserController extends Controller
{

    public function exportAllUsers()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');
        return (new UsersExport)->download('users.csv', Excel::CSV);
        // return (new UsersExport)->download('users.pdf', Excel::DOMPDF);

    }
    public function exportAllUsersPDF()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');
        return (new UsersExport)->download('users.pdf', Excel::DOMPDF);
    }

    public function downloadPdf()
    {
        return (new UsersExport)->download('users.pdf', Excel::DOMPDF);
    }


}
