<?php
namespace App\Imports;

use App\Location;
use Maatwebsite\Excel\Concerns\ToModel;

class LocationsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Location([
        'department_id' => $row[0],
        'section_id' => $row[1],
        'work_lga_id' => $row[2],
        'residential_lga_id' => $row[3],
        ]);
    }

}