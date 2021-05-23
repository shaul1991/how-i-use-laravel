<?php

declare(strict_types=1);


namespace App\Services\Post;


use App\Models\Post;
use App\Models\User;
use App\Services\Post\Dto\PostDto;

class SavePostService
{

    public function __construct(private Post $post)
    {
    }

    public function save(User $user, PostDto $dto): Post|bool
    {
        return $user->posts()->save($this->post->fill($dto->toArray()));
    }
}
