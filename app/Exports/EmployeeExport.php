<?php

namespace App\Exports;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class EmployeeExport implements FromView,ShouldAutoSize
{





    public function view(): View
    {

       $emps=Employee::all();
        return view('export', [
            'emps' => $emps
        ]);
    }
}