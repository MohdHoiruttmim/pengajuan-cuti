<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Fakultas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fakultas')->insert([
            'nama' => 'Hukum'
        ]);
        DB::table('fakultas')->insert([
            'nama' => 'Ekonomi dan Bisnis'
        ]);
        DB::table('fakultas')->insert([
            'nama' => 'Pertanian'
        ]);
        DB::table('fakultas')->insert([
            'nama' => 'Teknik'
        ]);
        DB::table('fakultas')->insert([
            'nama' => 'Ilmu Sosial dan Ilmu Budaya'
        ]);
        DB::table('fakultas')->insert([
            'nama' => 'Ilmu Pendidikan'
        ]);
        DB::table('fakultas')->insert([
            'nama' => 'Keislaman'
        ]);
    }
}
