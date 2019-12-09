<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['name','mobile_phone',
        'home_phone','office_phone','home_address',
        'postal_address'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];


}