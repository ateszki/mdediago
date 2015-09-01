<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class EnfermedadesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('enfermedades')->delete();
        DB::statement("insert into enfermedades (nombre) values 
				('Cáncer de colon y recto'),
				('Colelitiasis'),
				('Diverticulosis'),
				('Enfermedades del sistema digestivo'),
				('Hemorroides'),
				('Hernias'),
				('Lipomas'),
				('Pancreatitis'),
				('Peritonitis'),
				('Reflujo Gastroesofágico'),
				('Tumores'),
				('Verrugas')
        	");

    }
}