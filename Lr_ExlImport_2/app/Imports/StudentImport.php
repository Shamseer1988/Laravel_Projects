<?php

namespace App\Imports;

use Throwable;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class StudentImport implements ToModel, WithHeadingRow,SkipsOnError, WithValidation,SkipsOnFailure
{
    use SkipsErrors,Importable,SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'stu_name' =>$row['stu_name'],
            'stu_mob' =>$row['stu_mob'],
            'stu_email' =>$row['email'],
            'stu_status' =>$row['stu_status'],

        ]);
    }
    // For Skipp Errors when importing
    // public function onError(Throwable $error){

    // }
    // Import Validation Rules
    public function rules(): array
    {
        return [

            '*.email' =>  ['email' , 'unique:students,stu_email'],
            '*.stu_name' =>  ['required']
        ];
    }
    // public function onFailure(Failure ...$failure){

    // }

    // public function onFailure(Failure ...$failures)
    // {
    //     // Handle the failures how you'd like.
    // }

}
