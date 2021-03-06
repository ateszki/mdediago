<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use URL;

class Enfermedad extends Model {

	protected $table = 'enfermedades';

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
    ];

    public function medicos(){
    	return $this->belongsToMany("App\Medico");
    }
	public function getUrlAttribute(){
		return URL::to("enfermedades/".$this->slug);
	}
}
