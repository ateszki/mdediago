<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Consultorio;
use App\Medico;

class MedicoPlanesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('medicos_planes')->delete();
		
		DB::statement("insert into medico_plan (medico_id,plan_id) values(4,1)");
		DB::statement("insert into medico_plan (medico_id,plan_id) values(4,2)");
		DB::statement("insert into medico_plan (medico_id,plan_id) values(4,3)");


    }
}