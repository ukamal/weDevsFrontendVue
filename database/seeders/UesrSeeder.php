<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UesrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::create([
        	'name' => 'kamal hossen',
        	'email' => 'lara@gmail.com',
        	'password' => bcrypt('password'),
        ]);
    }
}
