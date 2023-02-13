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
            'id' => (time()-999999999),
            'barangay_name' => 'BALAYHANGIN',
            'barangay_chairman' => 'Lazaro Halili',
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
            
            'barangay_name' => 'BANGYAS',
            'barangay_chairman' => 'Rex Dungo',
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'DAYAP',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
            
            'barangay_name' => 'HANGGAN',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
        
            'barangay_name' => 'IMOK',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
     
            'barangay_name' => 'LAMOT 1',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'LAMOT 2',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
           
            'barangay_name' => 'LIMAO',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
            
            'barangay_name' => 'MABACAN',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
         
            'barangay_name' => 'MASIIT',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
        
            'barangay_name' => 'PALIPARAN',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
        
            'barangay_name' => 'PEREZ',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'POB. KANLURAN',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'POB. SILANGAN',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
     
            'barangay_name' => 'PRINZA',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
       
            'barangay_name' => 'SAN ISIDRO',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
     
            'barangay_name' => 'SANTO TOMAS',
            'barangay_chairman' => NULL,
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);
    }
}
