<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['user_name','phone','email','password','role_id'];

    /**
     * Hidden columns not to be returned in query result.
     */
    protected $hidden = ['created_at','updated_at','status'];

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();
        return $this->api_token;
    }
    public function rememberToken()
    {
        $rmtoken = "";
        for ($i=0; $i<6; $i++) {
            $rmtoken .= rand(1, 9);
        }
        $this->remember_token = $rmtoken;
        $this->save();
        return $this->remember_token;
    }
    /**
     * Get the role for this model.
     *
     * @return App\Role
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id')->get();
    }


}