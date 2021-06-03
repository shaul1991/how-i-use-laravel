<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->environment() !== 'production') {
            Post::factory()
                ->has(Tag::factory()->count(3))
                ->count(10)
                ->create();

            Tag::factory()
                ->has(Post::factory()->count(3))
                ->count(10)
                ->create();
        }
    }
}
