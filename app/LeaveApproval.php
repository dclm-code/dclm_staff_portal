<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveApproval extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['days_approved',
        'cs_approval','hod_approval','admin_approval'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];


}