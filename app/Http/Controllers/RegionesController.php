<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Provincia;
use App\Especialidad;
use App\Localidad;

class RegionesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->provincias();
	}
		
	public function provincias()
	{

		$provincias = Provincia::all();
		return view('listados.provincias',["provincias"=>$provincias]);
	}

	public function localidades($nombre_provincia){
		$provincia = Provincia::where('slug','=',$nombre_provincia)->first();
		$localidades = $provincia->localidades()->paginate(50);
		return view('listados.localidades',["provincia"=>$provincia,"localidades"=>$localidades]);

	}
	public function localidad($nombre_provincia,$nombre_localidad){
		$provincia = Provincia::where('slug','=',$nombre_provincia)->first();
		$localidad = Localidad::where('slug','=',$nombre_localidad)->first();
		
		return view('listados.localidad',["provincia"=>$provincia,"localidad"=>$localidad,"profesionales"=>$profesionales]);

	}
	public function especialidades()
	{

		$especialidades = Especialidad::orderBy("nombre")->paginate(50);
		return view('listados.especialidades',["especialidades"=>$especialidades]);
	}


}
