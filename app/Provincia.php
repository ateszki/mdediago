<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use URL;
class Provincia extends Model implements SluggableInterface {
	use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
    ];
	public function localidades(){
		return $this->hasMany('App\Localidad');
	}
	public function getUrlAttribute(){
		return URL::to("regiones/".$this->slug);
	}

}
