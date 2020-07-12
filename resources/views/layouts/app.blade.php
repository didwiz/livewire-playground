<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Audiotap</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('styles')

    <script src="https://unpkg.com/turbolinks"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @yield('content')
    </div>

    <footer>
    </footer>


    @include('layouts.partials.custom-scripts')
    <!-- include vendor/plugin/analytics scripts as shown below in a partial file-->
    {{-- @include('layouts.partials.analytics') --}}

    <!-- include custom scripts here like vendor/plugin scripts as shown below -->
    @stack('scripts')
    @livewireScripts
</body>

</html>
