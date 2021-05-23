<?php

declare(strict_types=1);

use App\Http\Controllers\Front\Post\PostController;

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);
});
