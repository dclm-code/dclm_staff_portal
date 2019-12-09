<?php
namespace App\Imports;

use App\Qualification;
use Maatwebsite\Excel\Concerns\ToModel;

class QualificationsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Qualification([
        'qualification_code' => $row[0],
        'qualification_name' => $row[1],
        ]);
    }

}