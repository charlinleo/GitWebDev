<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            'namaP' => 'T10 LED',
            'hargaP'=> '25000',
            'deskripsiP'=> 'LED ini dapat digunakan untuk lampu senja, lampu untuk indikator pada bagian panel dashboard dan lampu sein.',
        ]);

        DB::table("products")->insert([
            'namaP' => 'LED T15',
            'hargaP'=> '30000',
            'deskripsiP'=> 'Lampu ini dapat digunakan untuk lampu mundur.',
        ]);

        DB::table("products")->insert([
            'namaP' => 'COB (Chip On Board LED) Plasma',
            'hargaP'=> '20000',
            'deskripsiP'=> 'LED ini dapat digunakan untuk lampu Plafon Kabin.',
        ]);

        DB::table("products")->insert([
            'namaP' => 'LED BAU15S',
            'hargaP'=> '50000',
            'deskripsiP'=> 'LED ini dapat digunakan untuk lampu sein.',
        ]);

        DB::table("products")->insert([
            'namaP' => 'Resistor',
            'hargaP'=> '20000',
            'deskripsiP'=> 'Resistor ini digunakan untuk mengatasi hyperflash.',
        ]);

        DB::table("products")->insert([
            'namaP' => 'Lampu Sein Kipas T20',
            'hargaP'=> '85000',
            'deskripsiP'=> 'lampu ini dapat digunakan untuk lampu sein.',
        ]);
    }
}
