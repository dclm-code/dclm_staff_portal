<?php
namespace App\Imports;

use App\Country;
use Maatwebsite\Excel\Concerns\ToModel;

class CountriesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Country([
        'country_code' => $row[0],
        'country_name' => $row[1],
        ]);
    }

}