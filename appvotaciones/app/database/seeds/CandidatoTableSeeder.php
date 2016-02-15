<?php

use Illuminate\Support\Facades\Hash;

class CandidatoTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        
        DB::table('Candidato')->delete();
        DB::table('Partido')->delete();
        
        $logo='logo1';
        for ($i = 0; $i < 5; $i++){
        	$partido = Partido::create(array(
        	// 'id'=>$i,
            'nombre'=>$faker->name,
            'logo'=>"logo_".$i,
        	'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'remember_token' =>"token_".$i
            ));

            $candidato = Candidato::create(array(
            'nombre'=>$faker->name,
            'Partido_id'=>$partido->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'remember_token' =>"token_".$i
            ));
        }
       

    }
}