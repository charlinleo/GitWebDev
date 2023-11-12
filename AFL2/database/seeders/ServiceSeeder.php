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
        DB::table("services")->insert([
            'namaS' => 'Pemasangan Sein Superbright V3 LED',
            'durasiS' => '± 15 menit',
            'hargaS'=> '60000',
            'imageS'=> 'mobil1.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan License Plate LED Lamp',
            'durasiS' => '± 10 menit',
            'hargaS'=> '20000',
            'imageS'=> 'mobil2.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan LED Bicolor Foglamp',
            'durasiS' => '± 40 menit',
            'hargaS'=> '300000',
            'imageS' => 'mobil3.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan LED Cabin Light',
            'durasiS' => '± 20 menit',
            'hargaS'=> '80000',
            'imageS' => 'mobil4.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan Sein Superbright',
            'durasiS' => '± 15 menit',
            'hargaS'=> '60000',
            'imageS' => 'mobil5.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan Embargo Japanese Horn',
            'durasiS' => '± 30 menit',
            'hargaS'=> '120000',
            'imageS' => 'mobil6.jpeg',
        ]);
    }
}
