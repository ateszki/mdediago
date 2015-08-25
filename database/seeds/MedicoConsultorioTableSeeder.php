<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Consultorio;
use App\Medico;

class MedicoConsultorioTableSeeder extends Seeder {
    public function run()
    {
        //DB::table('medicos')->delete();
		DB::table('consultorios')->delete();
		
		Consultorio::create([
				"medico_id"=>4,"lat"=>"-34.59591", "lon"=>"-58.39408","domicilio"=>"Av. Santa Fe 1850 3er piso","pais_id"=>1,"provincia_id"=>3,"localidad_id"=>309,"telefono"=>"011-4821-2222"
			]);

    }
}