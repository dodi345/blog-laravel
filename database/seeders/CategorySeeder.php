<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Web Programming',
                'slug' => 'web-programming',
                'colors' => 'emerald'
            ],
            [
                'name' => 'Teknologi',
                'slug' => 'teknologi',
                'colors' => 'green'
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'colors' => 'blue'
            ],
            [
                'name' => 'Personality',
                'slug' => 'personality',
                'colors' => 'pink'
            ],
            [
                'name' => 'News World',
                'slug' => 'news-world',
                'colors' => 'yellow'
            ],
            [
                'name' => 'Tips and Tricks',
                'slug' => 'tips-and-trick',
                'colors' => 'lime'
            ],
        ];
        foreach ($categories as $category) {
            PostCategory::insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'colors' => $category['colors'],
            ]);
        }
    }
}
