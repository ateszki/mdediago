<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model {

	protected $fillable = ["nombre","cobertura_id"];

	protected $table = "planes";

	public function cobertura(){
		return $this->belongsTo('App\Cobertura');
	}

}
