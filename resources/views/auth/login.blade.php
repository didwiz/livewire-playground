@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm">
            <div>
                <img class="h-14 w-auto" src="/img/logos/logo.svg" alt="Workflow" />
                <div class="svg-bg mb-2 h-32 mt-8"></div>

                <h2 class="mt-4 text-3xl leading-9 font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
                <p class="mt-2 text-sm leading-5 text-gray-600 max-w">
                    Or
                    <a href="#" class="font-medium text-audio-purple-600 hover:text-audio-purple-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        start your 14 day trial
                    </a>
                </p>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                                Email address
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" style="@error('email') border-color: #f05252; @enderror" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                                Password
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password" autocomplete="current-password" type="password" name="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" style="@error('password') border-color: #f05252; @enderror" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-audio-purple-600 transition duration-150 ease-in-out" />
                                <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                                    Remember me
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="text-sm leading-5">
                                <a href="{{ route('password.request') }}" class="font-medium text-audio-purple-600 hover:text-audio-purple-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                    Forgot your password?
                                </a>
                            </div>
                            @endif
                        </div>

                        <div class="mt-8">
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit" class="w-full py-4 flex justify-center py-2 px-4 text-base border border-transparent text-sm font-medium rounded-md text-white bg-audio-purple-400 hover:bg-audio-purple-900 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Sign In
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-5 svg-bg h-32"></div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-cover" src="/img/login-cover.jpeg" alt="signUp" />
    </div>
</div>
@endsection
