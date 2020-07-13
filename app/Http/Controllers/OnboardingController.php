<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnboardingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->has_been_onboarded) {
            return redirect('dashboard');
        }
        return view('onboarding.index', compact('user'));
    }
}
