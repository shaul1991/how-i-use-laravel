<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->environment() !== 'production') {
            Post::factory()->count(100)->create();
        }
    }
}
