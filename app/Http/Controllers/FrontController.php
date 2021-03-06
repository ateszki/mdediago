<?php namespace App\Http\Controllers;
use App\Medico;
use App\Opinion;
use App\Centro;
class FrontController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$preguntas = json_decode(file_get_contents(url("/").'/preguntas/laravel-feed.php'),true);
		$preguntas_filtradas = [];
		
		foreach($preguntas as $k => $p){
			$preguntas_filtradas[$k] = $p;
			if(isset($preguntas_filtradas[$k]["respuestas"])){
				
				unset($preguntas_filtradas[$k]["respuestas"]);
			
				foreach($p["respuestas"] as $r){
					$u = Medico::where('user_id','=',$r["userid"])->first();
					if($u){
						$r["nombre"]=$u->nombre;
						$r["apellido"]=$u->apellido;
						$r["titulo"]=$u->titulo;
						$preguntas_filtradas[$k]["respuesta"] = $r;
						
					}
				}
			}
		}
		$cuentas = [];

		$cuentas["profesionales"] = Medico::count();
		$cuentas["centros"] = Centro::count();
		$cuentas["opiniones"] = Opinion::count();

		return view('inicio',["preguntas"=>$preguntas_filtradas,"cuentas"=>$cuentas]);
	}


}
