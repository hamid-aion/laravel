<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Add your JavaScript files here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
