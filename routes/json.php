<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Json Routes
|--------------------------------------------------------------------------
|
| Here is where you can register JSON routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group. Enjoy building your API!
|
*/


Route::post('sign-up', 'Json\SignUpController')->name('json.sign-up');
