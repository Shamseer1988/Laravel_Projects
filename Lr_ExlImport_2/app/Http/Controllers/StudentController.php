<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    // Main View
    public function show(){
        $student = Student::all();
        return view('excel' ,compact('student'));
    }
    //For File Import
    public function fileImport(Request $request){
            $request->validate([
                'file' => 'required|mimes:xlsx'
            ]);

            $file = $request->file('file')->store('import');

            $import = new StudentImport;
            $import->import($file);



            if($import->failures()->isNotEmpty()){
                return back()->withFailures($import->failures());
            }

            // Excel::import(new StudentImport, $file);
            return redirect()->back()->with('status','Student Data Imported Successfully');
        }




    // For File Export
    public function fileExport()
    {
        return Excel::download(new StudentExport, 'student.xlsx');
    }
}
