<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workouts extends Model
{
    protected $fillable = [
		'name', 
		'description'
	];
	
	public function program {
		return $this->belongsTo('App\Programs');
	}
}
