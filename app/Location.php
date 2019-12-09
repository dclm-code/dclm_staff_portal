<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['department_id','section_id',
        'work_lga_id','residential_lga_id'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the department for this model.
     *
     * @return App\Department
     */
    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id')->get();
    }

    /**
     * Get the section for this model.
     *
     * @return App\Section
     */
    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id')->get();
    }

    /**
     * Get the work_lga for this model.
     *
     * @return App\WorkLga
     */
    public function work_lga()
    {
        return $this->belongsTo('App\GroupLga', 'work_lga_id')->get();
    }

    /**
     * Get the residential_lga for this model.
     *
     * @return App\ResidentialLga
     */
    public function residential_lga()
    {
        return $this->belongsTo('App\GroupLga', 'residential_lga_id')->get();
    }


}