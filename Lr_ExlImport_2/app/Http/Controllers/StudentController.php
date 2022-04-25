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
            try {
            $file = $request->file('file');
            Excel::import(new StudentImport, $file);
            return redirect()->back()->with('status','Student Data Imported Successfully');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            return redirect()->back()->with('import_errors', $failures);

            // foreach ($failures as $failure) {
            //     $failure->row(); // row that went wrong
            //     $failure->attribute(); // either heading key (if using heading row concern) or column index
            //     $failure->errors(); // Actual error messages from Laravel validator
            //     $failure->values(); // The values of the row that has failed.
            // }
}
    }





    // For File Export
    public function fileExport()
    {
        return Excel::download(new StudentExport, 'student.xlsx');
    }
}
