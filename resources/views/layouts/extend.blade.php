@includeif('layouts.head')

<body>
<main>
    @includeif('layouts.header')
    @yield('content')
    @includeif('layouts.footer')
</main>
<script src="{{ asset('js/script.js') }}"></script>
</body>
