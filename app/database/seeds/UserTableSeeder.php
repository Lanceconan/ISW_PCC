<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

        DB::table('users')->insert(array(
                'id' => 1,
				'rut' => '18864783',
				'password' => Hash::make('1234'),
        ));

        DB::table('users')->insert(array(
                'id' => 2,
				'rut' => '15142427',
				'password' => Hash::make('5678'),
        ));

        DB::table('users')->insert(array(
                'id' => 3,
				'rut' => '20550470',
				'password' => Hash::make('9012'),
        ));

        DB::table('users')->insert(array(
                'id' => 4,
				'rut' => '20550471',
				'password' => Hash::make('3456'),
        ));
	}

}