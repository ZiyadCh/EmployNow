<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'role' => Str::random(20). 'chercheur',
            'specialite' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
        //
    }
}
