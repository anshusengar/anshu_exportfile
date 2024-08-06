<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExport;



class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emps=Employee::all();
        return view('home',compact('emps'));
    }


    public function exportData(){
        return Excel::download(new EmployeeExport, 'data.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function importDataForm()
    {
        return view('import');
        
    }



    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');

        // Process the CSV file
        if (($handle = fopen($file, 'r')) !== false) {
            $header = fgetcsv($handle, 1000, ',');

            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $employeeData = array_combine($header, $data);

                $exists = Employee::where('email', $employeeData['email'])
                                  ->orWhere('name', $employeeData['name'])
                                  ->exists();

                if ($exists) {
                    continue;
                }

                $emp=new Employee();
                $emp->name=$employeeData['name'];
                $emp->email=$employeeData['email'];
                $emp->phone=$employeeData['phone'];
                $emp->save();

            
            }

            fclose($handle);
        }

        return redirect('/');
    }

}
