<?php
namespace App\Imports;

use App\Discipline;
use Maatwebsite\Excel\Concerns\ToModel;

class DisciplinesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Discipline([
        'staff_id' => $row[0],
        'comments' => $row[1],
        'discipline_date' => $row[2],
        'date_restored' => $row[3],
        ]);
    }

}