<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Enfermedad;
use App\Medico;

class MedicoEnfermedadesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('enfermedad_medico')->delete();
		
		DB::statement("insert into enfermedad_medico (medico_id,enfermedad_id) values(4,5)");
		DB::statement("insert into enfermedad_medico (medico_id,enfermedad_id) values(4,6)");
		DB::statement("insert into enfermedad_medico (medico_id,enfermedad_id) values(4,7)");


    }
}