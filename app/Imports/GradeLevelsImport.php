<?php
namespace App\Imports;

use App\GradeLevel;
use Maatwebsite\Excel\Concerns\ToModel;

class GradeLevelsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new GradeLevel([
        'grade_level_code' => $row[0],
        'grade_level_name' => $row[1],
        ]);
    }

}