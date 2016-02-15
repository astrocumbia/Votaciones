<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('IFETableSeeder');
		// $this->call('CasillaTableSeeder');
		// $this->call('CandidatoTableSeeder');
		$this->command->info('Personas Insertadas!');
		// $this->call('UserTableSeeder');
	}

}
