<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 5 category sendiri

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Database',
            'slug' => 'database',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
            'color' => 'orange'
        ]);
    }
}
