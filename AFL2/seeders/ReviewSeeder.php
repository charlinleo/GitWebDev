<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table("reviews")->insert([
            'nama' => 'Charlin Leo',
            'rating' => '4.9/5',
            'comment' => 'Pengerjaannya cepat',
        ]);
        DB::table("reviews")->insert([
            'nama' => 'Jesslyn Halim',
            'rating' => '4.7/5',
            'comment' => 'Kereeenn',
        ]);
        DB::table("reviews")->insert([
            'nama' => 'Thomas Evander',
            'rating' => '4.5/5',
            'comment' => 'Ownernya baik hati🥰',
        ]);
        DB::table("reviews")->insert([
            'nama' => 'Hiroshi Hartono',
            'rating' => '5/5',
            'comment' => 'no comment terlalu perfect',
        ]);
        DB::table("reviews")->insert([
            'nama' => 'NCS',
            'rating' => '4/5',
            'comment' => 'Pengerjaannya agak lama',
        ]);
    }
}
