<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'type_name' => "MPV",
            'car_type' => "Toyota Innova"
        ]);

        DB::table('types')->insert([
            'type_name' => "MPV",
            'car_type' => "Toyota Innova Reborn"
        ]);

        DB::table('types')->insert([
            'type_name' => "MPV",
            'car_type' => "Toyota Innova Zenix"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Toyota Fortuner"
        ]);

        DB::table('types')->insert([
            'type_name' => "MPV",
            'car_type' => "Toyota Sienta"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Toyota Raize"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Toyota Rush"
        ]);

        DB::table('types')->insert([
            'type_name' => "MPV",
            'car_type' => "Toyota Avanza"
        ]);

        DB::table('types')->insert([
            'type_name' => "Hatchback",
            'car_type' => "Honda Brio"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Honda HRV"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Honda CRV"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Mazda CX-5"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Suzuki Ignis"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Mitsubishi Pajero"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Daihatsu Terios"
        ]);

        DB::table('types')->insert([
            'type_name' => "MPV",
            'car_type' => "Daihatsu Sirion"
        ]);

        DB::table('types')->insert([
            'type_name' => "SUV",
            'car_type' => "Renault Duster"
        ]);
    }
}
