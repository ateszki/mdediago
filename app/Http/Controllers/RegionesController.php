<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Provincia;
use App\Especialidad;
use App\Localidad;
use Input;

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
		$breadcrum = [];
		return view('listados.provincias',["provincias"=>$provincias,"titulo"=>"Provincias","breadcrum"=>$breadcrum]);
	}

	public function localidades($nombre_provincia){
		$provincia = Provincia::where('slug','=',$nombre_provincia)->first();
		$localidades = $provincia->localidades()->paginate(50);
		$breadcrum = [["url"=>"regiones","texto"=>"Provincias"]];
		return view('listados.localidades',["provincia"=>$provincia,"localidades"=>$localidades,"titulo"=>$provincia->nombre,"breadcrum"=>$breadcrum]);

	}
	public function localidad($nombre_provincia,$nombre_localidad){
		$provincia = Provincia::where('slug','=',$nombre_provincia)->first();
		$localidad = Localidad::where('slug','=',$nombre_localidad)->first();
		$consultorios = $localidad->consultorios_y_medicos()->paginate(50);
		$breadcrum = [["url"=>"provicias","texto"=>"Provincias"],["url"=>"provicias/".$provincia->slug,"texto"=>$provincia->nombre]];
		return view('listados.localidad',["provincia"=>$provincia,"localidad"=>$localidad,"consultorios"=>$consultorios,"titulo"=>$localidad->nombre,"breadcrum"=>$breadcrum]);

	}
	public function especialidades()
	{

		$especialidades = Especialidad::orderBy("nombre")->paginate(50);
		$breadcrum = [];
		return view('listados.especialidades',["especialidades"=>$especialidades,'titulo'=>"Especialidades",'breadcrum'=>$breadcrum]);
	}
	public function especialidad($nombre_especialidad){
		$especialidad = Especialidad::where('slug','=',$nombre_especialidad)->first();
		
		$data = Input::all();
		$filtro_localidad = (isset($data["localidad"]))?$data["localidad"]:null;
		$filtro_localidad_txt = (isset($data["txtLocalidad"]))?$data["txtLocalidad"]:null;
		$filtro_cobertura = (isset($data["coberturas"]))?$data["coberturas"]:null;
		$cons = $especialidad->consultorios($filtro_localidad);
		if($filtro_cobertura != null){
			$cons->whereRaw('medicos.id in (select mp.medico_id from medico_plan mp inner join planes p on mp.plan_id = p.id inner join coberturas c on p.cobertura_id = c.id where c.id = '.$filtro_cobertura.')');
		}
		$consultorios = $cons->paginate(50);
		$breadcrum = [["url"=>"especialidades","texto"=>"Especialidades"]];
		return view('listados.especialidad',["consultorios"=>$consultorios,'titulo'=>$especialidad->nombre,'breadcrum'=>$breadcrum,'filtro_localidad'=>$filtro_localidad,"filtro_localidad_txt"=>$filtro_localidad_txt,"filtro_cobertura"=>$filtro_cobertura]);

	}


}
