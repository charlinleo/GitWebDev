<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            'status' => "On Progress"
        ]);

        DB::table('statuses')->insert([
            'status' => "Accepted"
        ]);

        DB::table('statuses')->insert([
            'status' => "Not Accepted"
        ]);

        DB::table('statuses')->insert([
            'status' => "Pending"
        ]);

        DB::table('statuses')->insert([
            'status' => "Finished"
        ]);
    }
}
