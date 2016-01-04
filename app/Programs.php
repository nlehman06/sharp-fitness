<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $fillable = [
		'name', 
		'description', 
		'active'
	];
	
	public function scopeActive($query)
	{
		$query->where('active', '=', '1');
	}
	public function scopeInactive($query)
	{
		$query->where('active', '=', '0');
	}
	
	public function users()
	{
		return $this->belongsToMany('App\User')->withTimestamps();
	}
	
	public function getUserListAttribute()
	{
		return $this->users->lists('id')->all();
	}
	
	public function workouts()
	{
		return $this->hasMany('App\Workouts')->withTimestamps();
	}
}
