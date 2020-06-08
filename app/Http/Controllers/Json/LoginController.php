<?php

namespace App\Http\Controllers\Json;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required|password'
        ]);

        Auth::attempt(request()->only('email', 'password'));
        return response(['message' => 'You have been logged in successfully.', 'redirect' => Session::get('url.intended', '/dashboard')]);
    }
}
