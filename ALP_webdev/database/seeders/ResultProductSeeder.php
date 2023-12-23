<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('result_products')->insert([
            'result_id' => '1',
            'product_id' => '9' //foglamp 1 warna 3000k
        ]);

        DB::table('result_products')->insert([
            'result_id' => '2',
            'product_id' => '5' //lampu sein
        ]);

        DB::table('result_products')->insert([
            'result_id' => '3',
            'product_id' => '2' //lampu mundur
        ]);

        DB::table('result_products')->insert([
            'result_id' => '4',
            'product_id' => '26' //lampu plat
        ]);

        DB::table('result_products')->insert([
            'result_id' => '5',
            'product_id' => '26' //lampu plat
        ]);

        DB::table('result_products')->insert([
            'result_id' => '6',
            'product_id' => '2' //lampu mundur
        ]);

        DB::table('result_products')->insert([
            'result_id' => '7',
            'product_id' => '10' //foglamp 3 warna
        ]);

        DB::table('result_products')->insert([
            'result_id' => '8',
            'product_id' => '4' //lampu sein
        ]);

        DB::table('result_products')->insert([
            'result_id' => '9',
            'product_id' => '24' //lampu kabin
        ]);

        DB::table('result_products')->insert([
            'result_id' => '10',
            'product_id' => '9' //foglamp 1 warna 3000k
        ]);

        DB::table('result_products')->insert([
            'result_id' => '11',
            'product_id' => '5' //lampu sein
        ]);

        DB::table('result_products')->insert([
            'result_id' => '12',
            'product_id' => '4' //lampu sein
        ]);
    }
}
