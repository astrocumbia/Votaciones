<?php

use Illuminate\Support\Facades\Hash;

class VotosTableSeeder extends Seeder {



    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('Voto')->delete();

        $candidatos = Candidato::all();
        $casillas = Casilla::all();
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        
        $this->command->info('Iniciando inserción Votos!');

        foreach( $candidatos as $candidato ){
            foreach($casillas as $casilla){
                $len = rand(5,10);
                while($len--){
                    $data = array(
                        'remember_token' => $str,
                        'time' => \Carbon\Carbon::now()->toDateTimeString(),
                        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                        'Candidato_id' => $candidato->id,
                        'Casilla_id' => $casilla->id
                        );
                    $voto = Voto::create( $data );
                }
            }    
        }
       

    }
}