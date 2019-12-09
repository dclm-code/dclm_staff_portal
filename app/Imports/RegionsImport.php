<?php
namespace App\Imports;

use App\Region;
use Maatwebsite\Excel\Concerns\ToModel;

class RegionsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Region([
        'region_code' => $row[0],
        'region_name' => $row[1],
        'state_id' => $row[2],
        ]);
    }

}