<?php

declare(strict_types=1);


namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class IndexController extends Controller
{
    public function __invoke(): Renderable
    {
        return view('front.index');
    }
}
