<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('results')->insert([
            'image' => "alp1pajero.jpg",
            'type_id' => '14',
            'result_product_id' => '1',
            'result_service_id' => '1'
        ]);
 
        DB::table('results')->insert([
            'image' => "alp2innova.jpg",
            'type_id' => '1',
            'result_product_id' => '2',
            'result_service_id' => '2'
        ]);

        DB::table('results')->insert([
            'image' => "alp3sienta.jpg",
            'type_id' => '5',
            'result_product_id' => '3',
            'result_service_id' => '3'
        ]);

        DB::table('results')->insert([
            'image' => "alp4fortuner.jpg",
            'type_id' => '4',
            'result_product_id' => '4',
            'result_service_id' => '4'
        ]);

        DB::table('results')->insert([
            'image' => "alp5agx.jpg",
            'type_id' => '2',
            'result_product_id' => '5',
            'result_service_id' => '5'
        ]);

        DB::table('results')->insert([
            'image' => "alp6reborn.jpg",
            'type_id' => '2',
            'result_product_id' => '6',
            'result_service_id' => '6'
        ]);

        DB::table('results')->insert([
            'image' => "alp7mazda.jpg",
            'type_id' => '12',
            'result_product_id' => '7',
            'result_service_id' => '7'
        ]);

        DB::table('results')->insert([
            'image' => "alp8ignis.jpg",
            'type_id' => '13',
            'result_product_id' => '8',
            'result_service_id' => '8'
        ]);

        DB::table('results')->insert([
            'image' => "alp9brioabu.jpg",
            'type_id' => '9',
            'result_product_id' => '9',
            'result_service_id' => '9'
        ]);

        DB::table('results')->insert([
            'image' => "alp10reborn.jpg",
            'type_id' => '2',
            'result_product_id' => '10',
            'result_service_id' => '10'
        ]);

        DB::table('results')->insert([
            'image' => "alp11terios.jpg",
            'type_id' => '15',
            'result_product_id' => '11',
            'result_service_id' => '11'
        ]);

        DB::table('results')->insert([
            'image' => "alp12brio.jpg",
            'type_id' => '9',
            'result_product_id' => '12',
            'result_service_id' => '12'
        ]);
        
    }
}
