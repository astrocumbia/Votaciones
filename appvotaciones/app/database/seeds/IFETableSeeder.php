<?php

use Illuminate\Support\Facades\Hash;

class IFETableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        $this->command->info('Iniciando inserción!');
        DB::table('DBIFE')->delete();

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        $cad .= substr($str,rand(0,62),1);



        for ($i = 0; $i < 100; $i++){
        	$votante = DBIFE::create(array(
        	'nombre'=>$faker->name,
        	'clave_elector'=>$cad,
        	'clave_elector'=>print($cad),
        	// 'huella'=>'123456',
        	'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ));
        }

    }
}