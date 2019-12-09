<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['department_code','department_name','section_id'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the section for this model.
     *
     * @return App\Section
     */
    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id')->get();
    }


}