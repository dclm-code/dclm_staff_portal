<?php
namespace App\Imports;

use App\Recommendation;
use Maatwebsite\Excel\Concerns\ToModel;

class RecommendationsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Recommendation([
        'staff_id' => $row[0],
        'comments' => $row[1],
        'date_recommended' => $row[2],
        'date_effected' => $row[3],
        ]);
    }

}