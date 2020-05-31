<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AudioTap</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{--<link rel="stylesheet" href="/css/app.css">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')

    {{--<script src="/js/app.js" defer></script>--}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <header>
        <nav>
        </nav>
    </header>

    <div id="app" class="flex-center position-ref full-height">
        @yield('content')
        <flash-message></flash-message>
    </div>

    <footer>
    </footer>

    <script>
        @if(Auth::check())
            window.user = @json([
                'id' => Auth::user()->id,
                'name' => Auth::user()->name(),
                'email' => Auth::user()->email
            ]);
        @endif

        @if($message = session('success'))
            window.flash('{{ $message }}');
        @elseif($message = session('error'))
            window.flash('{{ $message }}','error');
        @endif
    </script>
    <!-- include vendor/plugin/analytics scripts as shown below in a partial file-->
    {{-- @include('partials.analytics') --}}

    <!-- include custom scripts here like vendor/plugin scripts as shown below -->
    @stack('scripts')
</body>

</html>