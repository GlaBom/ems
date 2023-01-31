<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangays')->insert([
            'id' => '1001',
            'barangay_name' => 'Balayhangin',
            'barangay_chairman' => 'Lazaro Halili',
            'contact_number' => NULL,
            'status' => 'Activate',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
            'id' => '1002',
            'barangay_name' => 'Bangyas',
            'barangay_chairman' => 'Rex Dungo',
            'contact_number' => NULL,
            'status' => 'Deactivate',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);


    }
}
