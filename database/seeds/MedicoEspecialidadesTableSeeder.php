<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Especialidad;
use App\Medico;

class MedicoEspecialidadesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('especialidad_medico')->delete();
		
		DB::statement("insert into especialidad_medico (medico_id,especialidad_id) values(4,187)");


    }
}