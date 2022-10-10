<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title', 'Aprendible')</title>
        <style>

        </style>
</head>
<body>
    @include('partials.nav')
    @include('partials.session-status')
    @yield('content')

</body>
</html>

