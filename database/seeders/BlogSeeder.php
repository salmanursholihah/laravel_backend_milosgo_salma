<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::insert([
            [
                'blog_category_id' => 1,
                'title' => 'Teknologi Masa Depan',
                'slug' => 'teknologi-masa-depan',
                'description' => 'Artikel tentang teknologi.',
                'seo_title' => 'Teknologi Masa Depan',
                'seo_description' => 'SEO teknologi',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_id' => 2,
                'title' => 'Tips Bisnis Online',
                'slug' => 'tips-bisnis-online',
                'description' => 'Bisnis digital.',
                'seo_title' => null,
                'seo_description' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_id' => 3,
                'title' => 'Gaya Hidup Sehat',
                'slug' => 'gaya-hidup-sehat',
                'description' => 'Hidup sehat.',
                'seo_title' => null,
                'seo_description' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_id' => 4,
                'title' => 'Tips Kesehatan',
                'slug' => 'tips-kesehatan',
                'description' => 'Artikel kesehatan.',
                'seo_title' => null,
                'seo_description' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_id' => 5,
                'title' => 'Dunia Otomotif',
                'slug' => 'dunia-otomotif',
                'description' => 'Berita otomotif.',
                'seo_title' => null,
                'seo_description' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
