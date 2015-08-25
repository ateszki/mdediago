<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model {

	protected $fillable=[ "domicilio","lat","lon","pais_id","provincia_id","localidad_id","telefono","principal","habilitado","medico_id" ];

	public function medico(){
		return $this->belongsTo('App\Medico');
	}

	public function localidad(){
		return $this->belongsTo('App\Localidad');
	}

	public function provincia(){
		return $this->belongsTo('App\Provincia');
	}

	public function getDomicilioCompletoAttribute(){
		return $this->domicilio.", ".$this->localidad->nombre.", ".$this->provincia->nombre;
	}

}
