<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Medico;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('medicos')->delete();

        DB::table('users')->delete();

        User::create(['id'=>1,'email' => 'cinnamon@medadvisors.com.ar','password'=>Hash::make('cinnamon'),'name'=>'Administrador','esAdmin'=>true]);

        //medico
		$m = User::create(['id'=>10,'email' => 'medico@gmail.com','password'=>Hash::make('cinnamon'),'name'=>'Alberto Gonzalez','esAdmin'=>false]);
		Medico::create(['user_id'=>$m->id,'nombre'=>'Alberto','apellido'=>'Gonzalez','titulo'=>'Médico Clínico.','web'=>'http://www.medico.com']);

        //paciente
        User::create(['id'=>15,'email' => 'paciente@gmail.com','password'=>Hash::make('cinnamon'),'name'=>'Juan Carlos Paciente','esAdmin'=>false]);

    }
}