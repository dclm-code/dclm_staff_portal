<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveRemark extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['hod_remark','cs_remark','admin_remark'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];


}