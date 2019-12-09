<?php
namespace App\Imports;

use App\Fuel;
use Maatwebsite\Excel\Concerns\ToModel;

class FuelsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Fuel([
        'department_id' => $row[0],
        'model' => $row[1],
        'plate' => $row[2],
        'milage' => $row[3],
        'litre' => $row[4],
        'admin' => $row[5],
        'audit' => $row[6],
        'store' => $row[7],
        'dispenser' => $row[8],
        'litre_dispensed' => $row[9],
        ]);
    }

}