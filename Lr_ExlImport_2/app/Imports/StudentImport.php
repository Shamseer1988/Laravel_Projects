<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentImport implements ToModel, WithHeadingRow
{
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
            'stu_email' =>$row['stu_email'],
            'stu_status' =>$row['stu_status'],

        ]);
    }

    //     public function rules(): array
    // {
    //     return [
    //         'stu_name' => 'required',
    //          // Above is alias for as it always validates in batches
    //         '*.stu_name' => 'required',

    //         'stu_email' => 'required|email|unique:Student',
    //          // Above is alias for as it always validates in batches
    //         '*.stu_email' => 'required|email|unique:Student',


    //     ];
    // }


}
