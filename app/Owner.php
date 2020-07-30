<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


class Owner extends Authenticatable
{
    use Notifiable;

    protected $table = 'owners';


    // protected $guard = 'owner';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function places()
    {
    	return $this->hasMany('App\Place');
    }

    public function request()
    {
        return $this->hasMany('App\request_to_be_owner');
    }
}
