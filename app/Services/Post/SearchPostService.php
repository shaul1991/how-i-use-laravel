<?php

declare(strict_types=1);


namespace App\Services\Post;


use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class SearchPostService
{

    public function __construct(private Post $post)
    {
    }

    public function all(): array|Collection
    {
        return $this->post->latest()->get();
    }

    public function getPublic(): Builder|Post
    {
        return $this->post->latest()->public();
    }

    public function getPrivate(): Builder|Post
    {
        return $this->post->latest()->private();
    }

    public function get(int $id): array|Collection|Post|null
    {
        return $this->post->findOrFail($id);
    }
}
