<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['section_code','section_name','group_lga_id'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the group_lga for this model.
     *
     * @return App\GroupLga
     */
    public function group_lga()
    {
        return $this->belongsTo('App\GroupLga', 'group_lga_id')->get();
    }


}