<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model {

	protected $fillable = ['nombre','apellido','titulo','web','user_id'];

}
