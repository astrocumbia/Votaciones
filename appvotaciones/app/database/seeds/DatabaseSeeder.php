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
		// $this->call('AreaTableSeeder');
		$this->call('CasillaTableSeeder');
		$this->command->info('Personas Insertadas!');
		// $this->call('UserTableSeeder');
	}

}
