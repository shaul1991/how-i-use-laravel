<?php

declare(strict_types=1);


namespace App\Http\Controllers\Front\Post;


use App\Http\Controllers\Controller;
use App\Services\Post\SearchPostService;

class PostController extends Controller
{

    public function __construct(private SearchPostService $searchPostService)
    {
    }

    public function index()
    {
        //
    }
}
