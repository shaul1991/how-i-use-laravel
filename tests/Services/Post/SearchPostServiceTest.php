<?php

declare(strict_types=1);

namespace Tests\Services\Post;

use App\Models\Post;
use App\Services\Post\SearchPostService;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SearchPostServiceTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @dataProvider allProviderData
     */
    public function can_view_all_posts(int $postCount): void
    {
        Post::factory()->count($postCount)->create();

        /** @var SearchPostService $searchPostService */
        $searchPostService = app(SearchPostService::class);

        /** @var Post[] $allPosts */
        $allPosts = $searchPostService->all();

        $this->assertCount($postCount, $allPosts);
    }

    public function allProviderData(): array
    {
        return [
            [
                0,
            ],
            [
                1,
            ],
            [
                2,
            ],
            [
                3,
            ],
            [
                4,
            ],
            [
                5,
            ],
        ];
    }

    /**
     * @test
     * @dataProvider isPublicPostProviderData
     */
    public function can_view_all_published_posts(int $actual, int $expect): void
    {
        Post::factory()->count(random_int(0, 10))->create(['is_public' => false]);
        Post::factory()->count($actual)->create(['is_public' => true]);

        /** @var SearchPostService $searchPostService */
        $searchPostService = app(SearchPostService::class);

        /** @var Post[] $publicPosts */
        $publicPosts = $searchPostService->getPublic()->get();

        $this->assertCount($expect, $publicPosts);
    }

    public function isPublicPostProviderData(): array
    {
        return [
            [
                0,
                0,
            ],
            [
                1,
                1,
            ],
            [
                2,
                2,
            ],
            [
                3,
                3,
            ],
            [
                4,
                4,
            ],
            [
                5,
                5,
            ],
        ];
    }

    /**
     * @test
     * @dataProvider isPrivatePostProviderData
     */
    public function can_view_all_private_posts(int $actual, int $expect): void
    {
        Post::factory()->count(random_int(0, 10))->create(['is_public' => true]);
        Post::factory()->count($actual)->create(['is_public' => false]);

        /** @var SearchPostService $searchPostService */
        $searchPostService = app(SearchPostService::class);

        /** @var Post[] $privatePosts */
        $privatePosts = $searchPostService->getPrivate()->get();

        $this->assertCount($expect, $privatePosts);
    }

    public function isPrivatePostProviderData(): array
    {
        return [
            [
                0,
                0,
            ],
            [
                1,
                1,
            ],
            [
                2,
                2,
            ],
            [
                3,
                3,
            ],
            [
                4,
                4,
            ],
            [
                5,
                5,
            ],
        ];
    }
}
