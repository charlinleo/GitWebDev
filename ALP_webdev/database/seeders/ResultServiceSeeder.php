<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('result_services')->insert([
            'result_id' => '1', 
            'service_id' => '4' //foglamp 1 warna 3000k
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '2',
            'service_id' => '3' //lampu sein
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '3',
            'service_id' => '2' //lampu mundur
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '4',
            'service_id' => '10' //lampu plat
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '5',
            'service_id' => '10' //lampu plat
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '6',
            'service_id' => '2' //lampu mundur
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '7',
            'service_id' => '4' //foglamp 3 warna
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '8',
            'service_id' => '3' //lampu sein
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '9',
            'service_id' => '9' //lampu kabin
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '10',
            'service_id' => '4' //foglamp 1 warna 3000k
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '11',
            'service_id' => '3' //lampu sein
        ]); 

        DB::table('result_services')->insert([
            'result_id' => '12',
            'service_id' => '3' //lampu sein
        ]); 
    }
}
