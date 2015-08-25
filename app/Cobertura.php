<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model {

	//
	public function planes(){
		return $this->hasMany("App\Plan");
	}

}
