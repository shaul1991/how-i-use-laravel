<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->environment() !== 'production') {
            Tag::factory()
                ->count(10)
                ->create();
        }
    }
}
