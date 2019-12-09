<?php
namespace App\Imports;

use App\DocumentType;
use Maatwebsite\Excel\Concerns\ToModel;

class DocumentTypesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DocumentType([
        'type' => $row[0],
        ]);
    }

}