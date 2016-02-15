<?php

use Illuminate\Support\Facades\Hash;

class CasillaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        $this->command->info('Iniciando inserción!');

        for ($i = 0; $i < 25; $i++){
        	'nombre'=>$faker->name,
        	'clave_elector'=>"Aquiinventalgo",
        	'huella'=>'123456',
        	'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        }

    }
}