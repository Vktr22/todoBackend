<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TevekenysegekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tevekenysegeks')->insert([
            ['kat_id' => 1, 'tev_nev' => '1. teendő', 'allapot' => '0', 'created_at' => now(), 'updated_at' => now()],
            ['kat_id' => 1, 'tev_nev' => '2. teendő', 'allapot' => '1', 'created_at' => now(), 'updated_at' => now()],

            ['kat_id' => 2, 'tev_nev' => '1. teendő', 'allapot' => '0', 'created_at' => now(), 'updated_at' => now()],
            ['kat_id' => 2, 'tev_nev' => '2. teendő', 'allapot' => '0', 'created_at' => now(), 'updated_at' => now()],

            ['kat_id' => 3, 'tev_nev' => '1. teendő', 'allapot' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['kat_id' => 3, 'tev_nev' => '2. teendő', 'allapot' => '0', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
