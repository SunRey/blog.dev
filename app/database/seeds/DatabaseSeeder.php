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

		DB::table('posts')->delete();
		DB::table('users')->delete();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
		//this is where to make another call for a new seeder
		
	}

}
