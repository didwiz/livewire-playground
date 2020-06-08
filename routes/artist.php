<?php

use Illuminate\Support\Facades\Route;

/**
 * These are routes for non-admin users like independent-artists/label managers
 * All routes in this file are prefixed with /artist and named artist.<name_of_route>
 * with a middleware for independent-artist|label|admin|super-admin
 */

Route::view('dashboard', 'dashboard.user.home');

// Route::get('logout', 'LogoutController');

