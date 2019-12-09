<?php
namespace App\Imports;

use App\Staff;
use Maatwebsite\Excel\Concerns\ToModel;

class StaffsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Staff([
        'staff_number' => $row[0],
        'first_name' => $row[1],
        'middle_name' => $row[2],
        'surname' => $row[3],
        'gender' => $row[4],
        'date_of_birth' => $row[5],
        'date_of_employment' => $row[6],
        'marital_status' => $row[7],
        'home_address' => $row[8],
        'next_of_kin_id' => $row[9],
        'grade_level_id' => $row[10],
        'qualification_id' => $row[11],
        ]);
    }

}