<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' 		=> 'Vilma',
    		'email' 	=> 'vilma@app.com.br',
    		'password'  => bcrypt('123456')
    	]);
    	User::create([
    		'name' 		=> 'Pedro',
    		'email' 	=> 'pedro@app.com.br',
    		'password'  => bcrypt('123456')
    	]);
    }
}
