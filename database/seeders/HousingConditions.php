<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HousingConditions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('housing_conditions')->insert([
            'id' => '01',
            'housing_condition_name' => 'Partially Damaged',
        ]);

        DB::table('housing_conditions')->insert([
            'id' => '02',
            'housing_condition_name' => 'Totally Damaged',
        ]);
    }
}
