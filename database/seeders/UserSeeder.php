<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Membuat user sendiri
        User::create([
            'name' => 'Muhammad Nur Rizqi Saputra',
            'username' => 'putra88',
            'email' => 'VWV0H@example',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        
        // Membuat 5 user palsu dengan factory
        User::factory(5)->create();
    }
}
