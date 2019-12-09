<?php
namespace App\Imports;

use App\Section;
use Maatwebsite\Excel\Concerns\ToModel;

class SectionsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Section([
        'section_code' => $row[0],
        'section_name' => $row[1],
        'group_lga_id' => $row[2],
        ]);
    }

}