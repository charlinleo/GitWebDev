<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'service_name' => "Pemasangan Blow Off Valve",
            'duration' => "30 Menit",
            'service_price' => "Rp 100.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Lampu Mundur",
            'duration' => "15 Menit",
            'service_price' => "Rp 50.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Lampu Sein",
            'duration' => "20 Menit",
            'service_price' => "Rp 50.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Fog Lamp",
            'duration' => "30 - 60 Menit",
            'service_price' => "Rp 100.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Toa",
            'duration' => "60 Menit",
            'service_price' => "Rp 150.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Down Pipe",
            'duration' => "30 - 60 Menit",
            'service_price' => "Rp 300.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Muffler",
            'duration' => "15 Menit",
            'service_price' => "Rp 100.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Front Pipe",
            'duration' => "30 - 60 Menit",
            'service_price' => "Rp 200.000",
        ]);

        DB::table('services')->insert([
            'service_name' => "Pemasangan Lampu Kabin",
            'duration' => "10 Menit",
            'service_price' => "Rp 50.000",
        ]);
    }
}
