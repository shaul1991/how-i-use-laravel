<?php

declare(strict_types=1);

use App\Http\Controllers\Front\Api\Post\PostController;

Route::group(['as' => 'apis.', 'prefix' => 'apis'], function () {
    Route::get('/posts', [PostController::class, 'index'])
        ->name('posts');
});
