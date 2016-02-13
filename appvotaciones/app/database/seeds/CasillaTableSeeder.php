<?php

use Illuminate\Support\Facades\Hash;

class CasillaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('Funcionario_casilla')->delete();
        DB::table('Casilla')->delete();
        DB::table('Jornada')->delete();
        DB::table('lugar')->delete();
        

        $this->command->info('Iniciando inserción!');

        for ($i = 0; $i < 25; $i++){
              $lugar = Lugar::create(array(
                    'estado'=>$faker->address,
                    'municipio'=>$faker->address,
                    'localidad'=>"localidad_".$i,
                    'seccion'=>$i,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                ));
              $jornada = Jornada::create(array(
                    'inicio'=>\Carbon\Carbon::now()->toDateTimeString(),
                    'fin'=>\Carbon\Carbon::now()->toDateTimeString(),
                    'nombre'=>'jornada'.$i,
                    // 'lugar_id'=>$lugar->id,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString() 
                ));
              $casilla = Casilla::create(array(
                    'MAC'=>$faker->uuid,
                    'password'=>Hash::make('123456123456123456'),
                    'Jornada_id'=>$jornada->id,
                    'lugar_id'=>$lugar->id,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString() 
                ));
              for ($j=0; $j < 3; $j++) { 
                  $funcionario = Funcionariocasilla::create(array(
                        'nombre'=>$faker->name,
                        'huella'=>$faker->uuid,
                        'password'=>Hash::make('123456'),
                        'Casilla_id'=>$casilla->id,
                        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString() 
                    ));
              }
            }
            //   $persona = Persona::create(array(
            //     'nombre' => $faker->name,
            //     'username' => $faker->userName,
            //     'codigoempleado'=>str_random(10),
            //     'email' => $faker->email,
            //     'area_id'=>rand(1,5),
            //     'rol_id'=>1,
            //     'password' => Hash::make('123456'),
            //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            //   ));
            //   $empleado = Empleado::create(array(
            //         'id' => $persona->id,
            //         'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            //         'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            //         'jefedirecto_id'=> rand(6,10),
            //         'puesto_id' => 1,
            //     ));
            // }
        $this->command->info('Fin de inserción!');

    }
}