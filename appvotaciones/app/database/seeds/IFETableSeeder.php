<?php

use Illuminate\Support\Facades\Hash;

class CasillaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        $this->command->info('Iniciando inserción!');

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        for($i=0;$i<12;$i++) {
         $cad .= substr($str,rand(0,18),1);
         }


        for ($i = 0; $i < 100; $i++){
        	$votante = DBIFE::create(array(
        	'nombre'=>$faker->cad,
        	'clave_elector'=>"asdc345rfgtyhjklo0",
        	'huella'=>'123456',
        	'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ));
        }

    }
}