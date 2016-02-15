<?php

use Illuminate\Support\Facades\Hash;

class CasillaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        $this->command->info('Iniciando inserción!');

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        



        for ($i = 0; $i < 100; $i++){
        	$votante = DBIFE::create(array(
        	'nombre'=>$faker->name,
        	'clave_elector'=>$cad .= substr($str,rand(0,62),1),
        	'huella'=>'123456',
        	'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ));
        }

    }
}