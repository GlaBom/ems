<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('users')->insert([
            'id' => (time() - 999999999),
            'last_name' => 'Ongaria',
            'first_name' => 'Gladys',
            'middle_name' => 'Bugatan',
            'usertype' => 'admin',
            'email' => 'gladys@ems.com',
            'username' => 'Gla',
            'password' => Hash::make('12345678'),
            'email_verified_at' => NULL,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
           
            'last_name' => 'Cosico',
            'first_name' => 'David',
            'middle_name' => 'Lubrin',
            'usertype' => 'encoder',
            'email' => 'david@ems.com',
            'username' => 'David',
            'password' => Hash::make('12345678'),
            'email_verified_at' => NULL,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
           
            'last_name' => 'Gutierrez',
            'first_name' => 'Myrose',
            'middle_name' => 'Lubrin',
            'usertype' => 'encoder',
            'email' => 'myrose@ems.com',
            'username' => 'Myrose',
            'password' => Hash::make('12345678'),
            'email_verified_at' => NULL,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
