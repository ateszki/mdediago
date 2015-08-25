<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model {

	protected $fillable = ['nombre','apellido','titulo','web','user_id'];

	public function consultorio(){
		return $this->hasMany("App\Consultorio");
	}

	public function planes(){
		return $this->belongsToMany('App\Plan');
	}

	public function coberturas(){
		$coberturas = [];
		foreach($this->planes as $plan){
			$cobertura = $plan->cobertura;
			$coberturas[$cobertura->id] = $cobertura;
		}
		return $coberturas;
	}

	public function especialidades(){
		return $this->belongsToMany('App\Especialidad');
	}

	public function getTituNomApeAttribute(){
		return $this->titulo.' '.$this->nombre.' '.$this->apellido;
	}
}
