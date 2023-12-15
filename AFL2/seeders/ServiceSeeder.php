<?php

namespace Database\Seeders;

use App\Models\Service;
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
            'namaS' => 'Pemasangan Sein',
            'durasiS' => '± 15 menit',
            'hargaS' => '60000',
            'product_id'=> '1',
            'imageS' => 'mobil1.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan Sein',
            'durasiS' => '± 15 menit',
            'hargaS' => '60000',
            'product_id'=> '4',
            'imageS' => 'mobil1.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan Sein',
            'durasiS' => '± 15 menit',
            'hargaS' => '60000',
            'product_id'=> '6',
            'imageS' => 'mobil1.jpeg',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan Lampu Mundur',
            'durasiS' => '± 10 menit',
            'hargaS' => '20000',
            'imageS' => 'mobil2.jpeg',
            'product_id'=> '2',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan LED Cabin Light',
            'durasiS' => '± 20 menit',
            'hargaS' => '80000',
            'imageS' => 'mobil4.jpeg',
            'product_id'=> '3',
        ]);

        DB::table("services")->insert([
            'namaS' => 'Pemasangan Resistor',
            'durasiS' => '± 15 menit',
            'hargaS' => '60000',
            'imageS' => 'mobil5.jpeg',
            'product_id'=> '5',
        ]);
    }
}
