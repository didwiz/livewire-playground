<?php

namespace App\Http\Controllers\Json;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class SignUpController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        //todo: create migration to break name into first_name & last_name and default to null
        request()->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'user_type' => 'required'
        ]);

        tap(User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'name' => ''
        ]), function ($user) {
            if (request('user_type') === '0') {
                $user->assignRole('independent-artist');
            }
            if (request('user_type') === '1') {
                $user->assignRole('label');
            }
            Auth::login($user);
        });

        return response(['redirect' => '/dashboard']);
    }
}
