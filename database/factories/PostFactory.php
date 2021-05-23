<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->title,
            'contents' => $this->faker->sentences(random_int(1, 5), true),
            'is_public' => $this->faker->boolean,
            'views' => 0,
        ];
    }
}
