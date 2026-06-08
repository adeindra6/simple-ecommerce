<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100 m-0">

    @include('layouts.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('layouts.footer')

    @stack('scripts')
</body>
</html>