<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Medico extends Model  implements SluggableInterface{

	protected $fillable = ['nombre','apellido','titulo','web','user_id','telefono','slug','especialidad'];

	use SluggableTrait;

    protected $sluggable = [
        'build_from' => ['titulo','nombre','apellido'],
        'save_to'    => 'slug',
    ];

	public function consultorios(){
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

	public function enfermedades(){
		return $this->belongsToMany('App\Enfermedad');
	}

	public function opiniones(){
		return $this->hasMany('App\Opinion');
	}

	public function opiniones_aprobadas(){
		return $this->opiniones()->where('estado','=','A')->orderBy('created_at','desc')->get();;
	}


	public function getValoracionGeneralAttribute(){
		$ops = $this->opiniones_aprobadas();

		$cant = $ops->count();
		$totales = [
			'total'=>0,
			'atencion' =>0,
			'puntualidad'=>0,
			'instalaciones'=>0,
			'honorarios'=>0,
			'equipamiento'=>0,
		];
		$ops->each(function($item,$key) use (&$totales){
			$totales["total"] +=  ($item->valoracion == NULL)?0:$item->valoracion;
			$totales["atencion"] +=  ($item->atencion == NULL)?0:$item->atencion;
			$totales["puntualidad"] +=  ($item->puntualidad == NULL)?0:$item->puntualidad;
			$totales["instalaciones"] +=  ($item->instalaciones == NULL)?0:$item->instalaciones;
			$totales["honorarios"] +=  ($item->honorarios == NULL)?0:$item->honorarios;
			$totales["equipamiento"] +=  ($item->equipamiento == NULL)?0:$item->equipamiento;
		});
		
		$promedios = [];
		$promedios["total"] = ($cant)?$totales["total"]/$cant:0;
		$promedios["atencion"] = ($cant)?$totales["atencion"]/$cant:0;
		$promedios["puntualidad"] = ($cant)?$totales["puntualidad"]/$cant:0;
		$promedios["instalaciones"] = ($cant)?$totales["instalaciones"]/$cant:0;
		$promedios["honorarios"] = ($cant)?$totales["honorarios"]/$cant:0;
		$promedios["equipamiento"] = ($cant)?$totales["equipamiento"]/$cant:0;

		foreach($promedios as $k => $prom){
			$promedios[$k] = round($prom,0,PHP_ROUND_HALF_UP);
		}

		return ["cant"=>$cant,"promedios"=>$promedios];  
	}

	public function getTituNomApeAttribute(){
		return $this->titulo.' '.$this->nombre.' '.$this->apellido;
	}
}
