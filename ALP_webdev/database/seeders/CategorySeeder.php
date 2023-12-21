<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'category_name' => "Blow Off Valve"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Lampu Mundur"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Lampu Sein"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Fog Lamp"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Toa"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Knalpot"
        ]);

        DB::table('categories')->insert([
            'category_name' => "Lampu Kabin"
        ]);
    }
}
