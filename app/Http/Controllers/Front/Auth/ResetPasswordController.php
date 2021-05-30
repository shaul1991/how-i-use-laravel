<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected string $redirectTo = RouteServiceProvider::HOME;

    public function showResetForm(Request $request): Renderable
    {
        return view('front.auth.passwords.reset')->with([
            'token' => $request->get('token'),
            'email' => $request->get('email'),
        ]);
    }
}
