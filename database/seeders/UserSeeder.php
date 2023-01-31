<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '2001',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'email_verified_at'=>now(),
            'password' => 12345678,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

    }
}
