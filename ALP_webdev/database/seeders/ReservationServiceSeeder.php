<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReservationServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservation_services')->insert([
            'reservation_id' => 1,
            'service_id' => 4
        ]);

        DB::table('reservation_services')->insert([
            'reservation_id' => 2,
            'service_id' => 4
        ]);

        DB::table('reservation_services')->insert([
            'reservation_id' => 3,
            'service_id' => 3
        ]);

        DB::table('reservation_services')->insert([
            'reservation_id' => 4,
            'service_id' => 5
        ]);
    }
}
