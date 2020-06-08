<?php

use Illuminate\Support\Facades\Route;

/**
 * These are routes for admin users
 * All routes in this file are prefixed with /admin and named admin.<name_of_route>
 * with a middleware for roles:admin|super-admin
 */
Route::view('dashboard', 'dashboard.admin.home');
