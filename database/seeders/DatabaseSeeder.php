<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // menggunakan factory seperti di tinker (php artisan migrate:fresh --seed)
        // panggil dahulu seeder category dan user kemudian lakukan factory post
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
        ]);
        Post::factory(20)->recycle([
            Category::all(),
            User::all()
        ]
        )->create();
    }
}
