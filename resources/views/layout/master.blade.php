<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('inc.links')
    </head>
    <body class="antialiased bg-orange-100 text-gray-800">
        @yield('nav')
        @yield('header')
        @yield('main')
        @yield('footer')
        @include('inc.scripts')
    </body>
</html>