<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use App\Consultorio;
use URL;

class Especialidad extends Model implements SluggableInterface {

	protected $table = 'especialidades';

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
    ];

    public function medicos(){
    	return $this->belongsToMany("App\Medico");
    }

    public function consultorios(){
    	return $this->medicos()->with('consultorios');
    }
    public function getUrlAttribute(){
        return URL::to("especialidades/".$this->slug);
    }
}
