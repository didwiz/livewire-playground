<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * These are routes for non-admin users like independent-artists/label managers
 * All routes in this file are prefixed with /artist and named artist.<name_of_route>
 * with a middleware for independent-artist|label|admin|super-admin
 */

Route::get('dashboard', fn () => view('dashboard.user.home', ['user' => Auth::user()]));

// Route::layout('layouts.dashboard.default')->group(function () {
//     Route::livewire('/onboarding', 'onboarding');
// });
