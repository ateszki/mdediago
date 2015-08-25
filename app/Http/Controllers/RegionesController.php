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
		$consultorios = $localidad->consultorios_y_medicos()->paginate(50);
		
		return view('listados.localidad',["provincia"=>$provincia,"localidad"=>$localidad,"consultorios"=>$consultorios]);

	}
	public function especialidades()
	{

		$especialidades = Especialidad::orderBy("nombre")->paginate(50);
		return view('listados.especialidades',["especialidades"=>$especialidades]);
	}
	public function especialidad($nombre_especialidad){
		$especialidad = Especialidad::where('slug','=',$nombre_especialidad)->first();
		$consultorios = $especialidad->consultorios()->paginate(50);
		
		return view('listados.especialidad',["consultorios"=>$consultorios]);

	}


}
