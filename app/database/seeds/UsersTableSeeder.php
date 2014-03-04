<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array(
			array('username'=>'rachmat','password'=>'12345','email'=>'test1@email.com'),
			array('username'=>'vendera','password'=>'12345','email'=>'test2@email.com'),
			array('username'=>'ichsan','password'=>'12345','email'=>'test3@email.com')
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
