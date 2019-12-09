<?php
namespace App\Imports;

use App\NextOfKin;
use Maatwebsite\Excel\Concerns\ToModel;

class NextOfKinsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new NextOfKin([
        'name' => $row[0],
        'mobile_phone' => $row[1],
        'home_phone' => $row[2],
        'office_phone' => $row[3],
        'home_address' => $row[4],
        'postal_address' => $row[5],
        ]);
    }

}