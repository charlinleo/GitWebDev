<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            'client_name' => "Hiroshi",
            'date' => now(),
            'total_purchase' => "150000",
            'status_id' => '1',
        ]);

        DB::table('reservations')->insert([
            'client_name' => "Nicholas",
            'date' => now(),
            'total_purchase' => "300000",
            'status_id' => '2',
        ]);

        DB::table('reservations')->insert([
            'client_name' => "Kimi",
            'date' => now(),
            'total_purchase' => "25000",
            'status_id' => '4',
        ]);

        DB::table('reservations')->insert([
            'client_name' => "Maverick",
            'date' => now(),
            'total_purchase' => "750000",
            'status_id' => '5',
        ]);
    }
}
