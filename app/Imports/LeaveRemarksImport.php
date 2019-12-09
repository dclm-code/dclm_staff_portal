<?php
namespace App\Imports;

use App\LeaveRemark;
use Maatwebsite\Excel\Concerns\ToModel;

class LeaveRemarksImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new LeaveRemark([
        'hod_remark' => $row[0],
        'cs_remark' => $row[1],
        'admin_remark' => $row[2],
        ]);
    }

}