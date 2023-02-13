<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'id' => (time()-999999999),
            'usertype' => 'admin',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('user_types')->insert([
            'usertype' => 'encoder',
            'created_at'=> now(),
		    'updated_at'=> now()
        ]);
    }
}