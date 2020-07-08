@extends('layouts.dashboard.default')

@section('sidebar-nav')
@include('layouts.dashboard.partials.nav')
@endsection

@section('dashboard-content')
<div class="pt-2 pb-6 md:py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        @include('dashboard.user.stats')
        @include('dashboard.user.collection')
    </div>
</div>

@endsection
