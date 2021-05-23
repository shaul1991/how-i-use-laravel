<?php

declare(strict_types=1);

namespace Tests\Services\Post;

use App\Models\Post;
use App\Models\User;
use App\Services\Post\Dto\PostDto;
use App\Services\Post\SavePostService;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SavePostServiceTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function can_save_post(): void
    {
        /** @var User $user */
        $user = User::factory()->create();

        /** @var SavePostService $savePostService */
        $savePostService = app(SavePostService::class);

        /** @var Post $postData */
        $postData = Post::factory()->make();

        $dto = new PostDto($postData->title, $postData->contents, $postData->is_public);

        /** @var Post $post */
        $post = $savePostService->save($user, $dto);

        $this->assertDatabaseHas($post->getTable(), $dto->toArray());
        $this->assertEquals($user->id, $post->user_id);
        $this->assertEquals($postData->title, $post->title);
        $this->assertEquals($postData->contents, $post->contents);
        $this->assertEquals($postData->is_public, $post->is_public);
        $this->assertEquals(0, $post->views);
    }
}
