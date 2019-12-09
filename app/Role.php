<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['role'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];


}