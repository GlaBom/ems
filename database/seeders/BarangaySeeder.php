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
            'barangay_chairman' => 'LAZARO HALILI',
            'contact_number' => '(049) 566-0460/0909-311-1429',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
            
            'barangay_name' => 'BANGYAS',
            'barangay_chairman' => 'REX DUNGO',
            'contact_number' => NULL,

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'DAYAP',
            'barangay_chairman' => 'FERMIN AGONIA',
            'contact_number' => '0948-199-8814',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
            
            'barangay_name' => 'HANGGAN',
            'barangay_chairman' => 'JOAN PAMELA BABATID',
            'contact_number' => '0949-337-3788',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
        
            'barangay_name' => 'IMOK',
            'barangay_chairman' => 'RUEL PANERGAYO',
            'contact_number' => '0946-034-3790',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
     
            'barangay_name' => 'LAMOT 1',
            'barangay_chairman' => 'NESTOR OCAMPO',
            'contact_number' => '0998-394-7999',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'LAMOT 2',
            'barangay_chairman' => 'MAC JEFFERSON ROXAS',
            'contact_number' => '(049)310-1187 / 0917-506-7885',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
           
            'barangay_name' => 'LIMAO',
            'barangay_chairman' => 'ROMEO ALVAREZ',
            'contact_number' => '0929-845-4973',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
            
            'barangay_name' => 'MABACAN',
            'barangay_chairman' => 'DARWIN GUEVARRA',
            'contact_number' => '0939-938-7328',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
         
            'barangay_name' => 'MASIIT',
            'barangay_chairman' => 'ERNESTO CARPIO',
            'contact_number' => '0950-118-6147',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
        
            'barangay_name' => 'PALIPARAN',
            'barangay_chairman' => 'RICARDO CUETO',
            'contact_number' => '0919-254-6140',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
        
            'barangay_name' => 'PEREZ',
            'barangay_chairman' => 'FRANCISCO AVERION',
            'contact_number' => '0927-983-4261',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'POB. KANLURAN',
            'barangay_chairman' => 'KENNETH KRAFT',
            'contact_number' => '(049)566-0343 / 0918-449-5866',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
          
            'barangay_name' => 'POB. SILANGAN',
            'barangay_chairman' => 'ELEONORA VELECINA',
            'contact_number' => '0928-200-2651',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
     
            'barangay_name' => 'PRINZA',
            'barangay_chairman' => 'KASSEL CASSANDRA KRAFT',
            'contact_number' => '0999-816-0528',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
       
            'barangay_name' => 'SAN ISIDRO',
            'barangay_chairman' => 'VIRGILIO NASAYAW',
            'contact_number' => '0975-215-8409',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);

        DB::table('barangays')->insert([
     
            'barangay_name' => 'SANTO TOMAS',
            'barangay_chairman' => 'ROMMEL BELANO',
            'contact_number' => '(049)536-4748 / 0929-159-5904',

            'created_at'=> now(),
		    'updated_at'=> now()
        ]);
    }
}
