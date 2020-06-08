<script>
    @if(Auth::check())
        window.user = @json([
            'id' => Auth::user()->id,
            'name' => Auth::user()->name() ?? '',
            'email' => Auth::user()->email
        ]);
    @endif

    @if($message = session('success'))
        window.flash('{{ $message }}');
    @elseif($message = session('error'))
        window.flash('{{ $message }}','error');
    @endif
</script>

<script>
    window.Laravel = @json([
        'csrfToken' => csrf_token()
    ]);
</script>
