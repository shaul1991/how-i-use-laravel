<?php

declare(strict_types=1);


namespace App\Services\Post\Dto;

use Illuminate\Contracts\Support\Arrayable;

class PostDto implements Arrayable
{

    public function __construct(
        private string $title,
        private string $contents,
        private bool $is_public
    ) {
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
