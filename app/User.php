<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password', 'birthDate', 'startDate'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function setBirthDateAttribute($date){
		$this->attributes['birthDate'] = Carbon::createFromFormat('Y-m-d', $date);
	}
	public function setStartDateAttribute($date){
		$this->attributes['startDate'] = Carbon::createFromFormat('Y-m-d', $date);
	}
	
	public function isAdmin(){
		if($this->admin == 'Y'){
			return true;
		}
		
		return false;
	}
}
