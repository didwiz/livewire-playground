<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * These are routes for admin users
 */

Route::group(['prefix' => 'admin', 'middleware' => 'role:admin|super-admin', 'name' => 'admin.'], function () {
    require __DIR__ . '/admin.php';
});

/**
 * These are routes for non-admin users like independent-artists/label managers
 */

Route::group(['prefix' => '', 'middleware' => ['redirect_un_onboarded', 'role:independent-artist|label|admin|super-admin'], 'name' => 'artist.'], function () {
    require __DIR__ . '/user.php';
});

Route::get('logout', 'LogoutController');
Route::get('onboarding', 'OnboardingController@index');


/**
 * These are routes for pages that don't require authentication, for guest users especially and other users, like a blog page, contact page etc. login/signup
 */

Route::name('guest')->group(function () {
    require __DIR__ . '/guest.php';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
