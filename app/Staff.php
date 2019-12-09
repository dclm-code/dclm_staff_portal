<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'staff_number','first_name',
        'middle_name','surname','gender','date_of_birth',
        'date_of_employment','marital_status','home_address',
        'next_of_kin_id','grade_level_id','qualification_id'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the next_of_kin for this model.
     *
     * @return App\NextOfKin
     */
    public function next_of_kin()
    {
        return $this->belongsTo('App\NextOfKin', 'next_of_kin_id')->get();
    }

    /**
     * Get the grade_level for this model.
     *
     * @return App\GradeLevel
     */
    public function grade_level()
    {
        return $this->belongsTo('App\GradeLevel', 'grade_level_id')->get();
    }

    /**
     * Get the qualification for this model.
     *
     * @return App\Qualification
     */
    public function qualification()
    {
        return $this->belongsTo('App\Qualification', 'qualification_id')->get();
    }


}