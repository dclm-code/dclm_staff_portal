<?php
namespace App\Imports;

use App\GroupLga;
use Maatwebsite\Excel\Concerns\ToModel;

class GroupLgasImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new GroupLga([
        'state_id' => $row[0],
        'region_id' => $row[1],
        'local_govt_name' => $row[2],
        'local_govt_code' => $row[3],
        ]);
    }

}