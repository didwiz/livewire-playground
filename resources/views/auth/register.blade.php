@extends('layouts.app')

@section('content')
{{--
<form method="POST" action="{{ route('register') }}">
@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="@error('password') border-color: #f05252; @enderror">

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="@error('password') border-color: #f05252; @enderror">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
</form>
--}}
<div class="min-h-screen bg-white flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm">
            <div>
                <img class="h-14 w-auto" src="/img/logos/logo.svg" alt="Workflow" />

                <div class="svg-bg mb-2 h-32 mt-8"></div>

                <h2 class="mt-4 text-3xl leading-9 font-extrabold text-gray-900">
                    Create an account
                </h2>
                <p class="mt-2 text-sm leading-5 text-gray-600 max-w">
                    Or
                    <a href="{{ route('login') }}" class="font-medium text-audio-purple-600 hover:text-audio-purple-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        login here if you already have an account
                    </a>
                </p>
            </div>

            <div class="mt-8">
                <!-- alternate sign up options -->
                <div class="mt-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{--<div class="mt-2">
                            <label for="name" class="block text-sm font-medium leading-5 text-gray-700" :class="{ 'text-red-700': errors.email !== null }">
                                Full Name
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" style="@error('password') border-color: #f05252; @enderror" />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>--}}
            <div class="mt-2">
                <label for="email" class="block text-sm font-medium leading-5 text-gray-700" :class="{ 'text-red-700': errors.email !== null }">
                    Email address
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" style="@error('password') border-color: #f05252; @enderror" />

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mt-2">
                <label for="password" class="block text-sm font-medium leading-5 text-gray-700" :class="{ 'text-red-700': errors.email !== null }">
                    Password
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input id="password" type="password" name="password" required autocomplete="new-password" class=" form-control appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" style="@error('password') border-color: #f05252; @enderror" />

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>

            {{--
            <div class="mt-6">
                <p class="block text-sm font-medium leading-5 text-gray-700">
                    Are you a :
                </p>
                <div class="flex items-center mt-2">
                    <input id="label" type="radio" v-model="user_type" value="1" class="form-radio h-4 w-4 text-audio-purple-600 transition duration-150 ease-in-out" />
                    <label for="label" class="ml-3">
                        <span class="block text-sm leading-5 font-medium text-gray-700">Record Label</span>
                    </label>
                </div>
                <div class="mt-4 flex items-center">
                    <input id="push_email" v-model="user_type" value="0" type="radio" class="form-radio h-4 w-4 text-audio-purple-600 transition duration-150 ease-in-out" />
                    <label for="push_email" class="ml-3">
                        <span class="block text-sm leading-5 font-medium text-gray-700">Independent Artist</span>
                    </label>
                </div>
            </div>
            --}}

            <div class="mt-8">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="w-full py-4 flex justify-center py-2 px-4 text-base border border-transparent text-sm font-medium rounded-md text-white bg-audio-purple-400 hover:bg-audio-purple-900 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Sign Up
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
    <img class="absolute inset-0 h-full w-full object-cover" src="/img/signup-cover.png" alt="signUp" />
</div>
</div>
@endsection
