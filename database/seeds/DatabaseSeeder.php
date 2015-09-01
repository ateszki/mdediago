<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('UserTableSeeder');
		 $this->call('LocalidadesTableSeeder');
		 $this->call('EspecialidadesTableSeeder');
		 $this->call('EnfermedadesTableSeeder');
		 $this->call('CoberturasTableSeeder');
		 $this->call('PlanesTableSeeder');
		 $this->call('MedicoConsultorioTableSeeder');
		 $this->call('MedicoPlanesTableSeeder');
		 $this->call('MedicoEspecialidadesTableSeeder');
		 $this->call('MedicoEnfermedadesTableSeeder');
	}

}
