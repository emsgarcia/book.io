<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'firstname' => 'Juan',
        	'middlename' => 'Dela',
        	'lastname' => 'Cruz',
        	'username' => 'Administrator',
        	'email' => 'mail@gmail.com',
        	'admin' => 1,
        	'password' => bcrypt('admin')

        ]);
    }
}
