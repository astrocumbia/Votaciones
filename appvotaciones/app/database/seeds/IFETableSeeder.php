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
        



        for ($i = 0; $i < 100; $i++){
        	$votante = DBIFE::create(array(
        	'nombre'=>$faker->name,
<<<<<<< HEAD
        	'clave_elector'=>$cad .= substr($str,rand(0,62),1),
=======
        	'clave_elector'=>$cad,
        	'clave_elector'=>print($cad),
>>>>>>> b9b6ff20a6c14e859debd1188420400d3fdae1c8
        	'huella'=>'123456',
        	'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ));
        }

    }
}