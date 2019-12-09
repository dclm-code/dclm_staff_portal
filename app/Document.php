<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['document_type_id','filepath'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    /**
     * Get the document_type for this model.
     *
     * @return App\DocumentType
     */
    public function document_type()
    {
        return $this->belongsTo('App\DocumentType', 'document_type_id')->get();
    }


}