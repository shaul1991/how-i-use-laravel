<?php

declare(strict_types=1);


namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class SearchPostService
{
    public function __construct(private Post $post)
    {
    }

    public function all(): array|Collection
    {
        return $this->post->all();
    }

    public function paginate(int $limit = null): LengthAwarePaginator
    {
        return $this->post->latest()->paginate($limit);
    }

    public function getPublic(): Builder|Post
    {
        return $this->post->isPublic();
    }

    public function getPrivate(): Builder|Post
    {
        return $this->post->isPrivate();
    }
}
