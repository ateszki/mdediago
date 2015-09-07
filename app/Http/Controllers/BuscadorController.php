<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Medico;
use App\Especialidad;
use App\Enfermedad;
use App\Provincia;
use App\Localidad;




class BuscadorController extends Controller
{
    public function autocomplete()
    {
        $data = Input::all();
        $term = "%".$data["term"]."%";
        $listado = [];
        
        $medicos = Medico::where('nombre','like',$term)->orWhere("apellido",'like',$term)->get();
        foreach($medicos as $medico){
            $listado[] = ["label"=>$medico->titu_nom_ape,"category"=>"Profesionales","url"=>$medico->url];
        }
        $especialidades = Especialidad::where('nombre','like',$term)->get();
        foreach($especialidades as $especialidad){
            $listado[] = ["label"=>$especialidad->nombre,"category"=>"Especialidades","url"=>$especialidad->url];
        }
        $enfermedades = Enfermedad::where('nombre','like',$term)->get();
        foreach($enfermedades as $enfermedad){
            $listado[] = ["label"=>$enfermedad->nombre,"category"=>"Enfermedades","url"=>$enfermedad->url];
        }
        $localidades = Localidad::where('nombre','like',$term)->get();
        foreach($localidades as $localidad){
            $listado[] = ["label"=>$localidad->provincia_nombre,"category"=>"Localidades","url"=>$localidad->url];
        }
        $provincias = Provincia::where('nombre','like',$term)->get();
        foreach($provincias as $provincia){
            $listado[] = ["label"=>$provincia->nombre,"category"=>"Provincias","url"=>$provincia->url];
        }

        return response()->json($listado);
    }
}
