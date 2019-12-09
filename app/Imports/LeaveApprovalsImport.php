<?php
namespace App\Imports;

use App\LeaveApproval;
use Maatwebsite\Excel\Concerns\ToModel;

class LeaveApprovalsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new LeaveApproval([
        'days_approved' => $row[0],
        'cs_approval' => $row[1],
        'hod_approval' => $row[2],
        'admin_approval' => $row[3],
        ]);
    }

}