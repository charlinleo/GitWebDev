<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReservationProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservation_products')->insert([
            'reservation_id' => 1,
            'product_id' => 8
        ]);

        DB::table('reservation_products')->insert([
            'reservation_id' => 2,
            'product_id' => 10
        ]);

        DB::table('reservation_products')->insert([
            'reservation_id' => 3,
            'product_id' => 5
        ]);

        DB::table('reservation_products')->insert([
            'reservation_id' => 4,
            'product_id' => 13
        ]);
        
        DB::table('reservation_products')->insert([
            'reservation_id' => 5,
            'product_id' => 2
        ]);
    }
}
