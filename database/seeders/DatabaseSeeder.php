<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert(
        [
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@paw.com',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert(
        [
            'name' => 'user',
            'role' => 'user',
            'email' => 'user@paw.com',
            'password' => Hash::make('user1234'),
        ]);
    }
}
