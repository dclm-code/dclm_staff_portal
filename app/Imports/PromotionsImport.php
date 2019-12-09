<?php
namespace App\Imports;

use App\Promotion;
use Maatwebsite\Excel\Concerns\ToModel;

class PromotionsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Promotion([
        'date_of_last_promotion' => $row[0],
        'previous_position' => $row[1],
        'current_position' => $row[2],
        ]);
    }

}