<?php

declare(strict_types=1);


use App\Http\Controllers\Front\IndexController;

Route::get('/', IndexController::class)
    ->name('main');
