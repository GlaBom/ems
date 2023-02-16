<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealthConditions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('health_conditions')->insert([
            'id' => '01',
            'health_condition_name' => 'Dead',
        ]);

        DB::table('health_conditions')->insert([
            'id' => '02',
            'health_condition_name' => 'Injured',
        ]);

        DB::table('health_conditions')->insert([
            'id' => '03',
            'health_condition_name' => 'Missing',
        ]);

        DB::table('health_conditions')->insert([
            'id' => '04',
            'health_condition_name' => 'With Illness',
        ]);
    }
}
