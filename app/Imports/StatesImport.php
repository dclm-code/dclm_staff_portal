<?php
namespace App\Imports;

use App\State;
use Maatwebsite\Excel\Concerns\ToModel;

class StatesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new State([
        'country_id' => $row[0],
        'state_code' => $row[1],
        'state_name' => $row[2],
        ]);
    }

}