<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');
Route::view('/login', 'auth.login');
Route::view('/signup', 'auth.sign-up');
