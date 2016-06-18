<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
        DB::table('users')->insert([
       'name' => 'nirajan',
       'email' => 'nirajankay@gmail.com',
         'password' => bcrypt('nirajan'),
         'status'=>'1',
		 //$this->call('UserTableSeeder');
            ]);

        DB::table('users')->insert([
       'name' => 'sandesh',
       'email' => 'sandesh@gmail.com',
         'password' => bcrypt('sandesh'),
         'status'=>'1',
     
		 //$this->call('UserTableSeeder');
            ]);
	}

}
