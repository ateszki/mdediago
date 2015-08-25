<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Localidad extends Model implements SluggableInterface {

	protected $table = 'localidades';

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
    ];

    public function consultorios(){
    	return $this->hasMany("App\Consultorio");
    }

    public function consultorios_y_medicos(){
    	return $this->consultorios()->with("medico");
    }
}
