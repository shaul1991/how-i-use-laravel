<?php

declare(strict_types=1);


namespace App\Http\Controllers\Front\Api\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\SearchPostService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PostController extends Controller
{

    public function __construct(private SearchPostService $searchPostService)
    {
    }

    public function index(): LengthAwarePaginator
    {
        return $this->searchPostService->getPublic()->with('tags')->paginate();
    }
}
