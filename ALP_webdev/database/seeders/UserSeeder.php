<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Charlin Leo',
            'email' => 'ccharlin@student.ciputra.ac.id',
            'email_verified_at' => now(),
            'password' => bcrypt('12341234'),
            'role_id' => 1,
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Brian',
            'email' => 'test@coba.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12341234'),
            'role_id' => 2,
            'remember_token' => Str::random(10)
        ]);

    }
}
