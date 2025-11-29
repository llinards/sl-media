<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="flex min-h-screen flex-col items-center justify-center p-6 lg:p-8">
        {{ $slot }}
        @fluxScripts
    </body>
</html>
