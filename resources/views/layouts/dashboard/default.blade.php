@extends('layouts.app')

@section('content')
<div x-data="{ open: false }" class="h-screen flex overflow-hidden bg-gray-100">
    <!-- Off-canvas menu for mobile -->
    @include('layouts.dashboard.mobile')
    <!-- mobile view end -->

    <!-- Static sidebar for desktop -->
    @include('layouts.dashboard.partials.desktop-side-bar')
    <!-- dashboard center -->
    @include('layouts.dashboard.desktop')

</div>
@endsection
