<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $table = 'opiniones';

    protected $fillable = ['user_id','user_mod_id','consultorio_id','medico_id','valoracion','atencion','puntualidad','instalaciones','honorarios','equipamiento','estado','motivo_visita','me_gusta','puede_mejorar'];

    public function medico(){
    	return $this->belongsTo('App\Medico');
    }
    public function usuario(){
    	return $this->belongsTo('App\User');
    }
    public function moderador(){
    	return $this->belongsTo('App\User','user_mod_id');
    }

    public function consultorio(){
    	return $this->belongsTo('App\Consultorio');
    }
}
