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

    public function consultorios($localidad_id=null){
        if($localidad_id == null){
            return $this->medicos()->with('consultorios');
        } else {
            return $this->medicos()->with(['consultorios'=>function($query) use ($localidad_id){
                $query->where('localidad_id','=',$localidad_id);
            }]);
        }
    	
    }
    public function getUrlAttribute(){
        return URL::to("especialidades/".$this->slug);
    }
}
