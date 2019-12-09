<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['qualification_code','qualification_name'];

    /**
     *
     * Hidden columns not to be returned in query result.
     *
     */
    protected $hidden = ['created_at','updated_at','status'];


}