<?php
namespace App\Imports;

use App\Leafe;
use Maatwebsite\Excel\Concerns\ToModel;

class LeavesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Leafe([
        'staff_id' => $row[0],
        'reliever' => $row[1],
        'days_requested' => $row[2],
        'balance_of_leave' => $row[3],
        'public_holiday' => $row[4],
        'basics' => $row[5],
        'allowance' => $row[6],
        'date_resume' => $row[7],
        'entitled' => $row[8],
        ]);
    }

}