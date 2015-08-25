<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Cobertura;
use App\Plan;
class PlanesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('planes')->delete();
			    
        $C = App\Cobertura::where('nombre','like','%OSDE%')->first();

        App\Plan::create(["nombre"=>"210","cobertura_id"=>$C->id]);
		App\Plan::create(["nombre"=>"310","cobertura_id"=>$C->id]);
		App\Plan::create(["nombre"=>"410","cobertura_id"=>$C->id]);

				
    }
}