<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenureStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenure_status')->insert([
            'id' => '01',
            'status_name' => 'House & lot owner',
        ]);

        DB::table('tenure_status')->insert([
            'id' => '02',
            'status_name' => 'Rented house & lot',
        ]);

        DB::table('tenure_status')->insert([
            'id' => '03',
            'status_name' => 'House owner & lot renter',
        ]);

        DB::table('tenure_status')->insert([
            'id' => '04',
            'status_name' => 'House owner, rent-free lot with consent of the owner',
        ]);

        DB::table('tenure_status')->insert([
            'id' => '05',
            'status_name' => 'House owner, rent-free lot without consent of the owner',
        ]);

        DB::table('tenure_status')->insert([
            'id' => '06',
            'status_name' => 'Rent-free house & lot with consent of the owner',
        ]);

        DB::table('tenure_status')->insert([
            'id' => '07',
            'status_name' => 'Rent-free house & lot without consent of the owner',
        ]);

        
    }
}
