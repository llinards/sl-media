<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="flex min-h-screen flex-col">
<main class="flex flex-1 items-center justify-center p-6 lg:p-8">
    {{ $slot }}
</main>
<footer class="text-center p-6 lg:p-8">
    @include('partials.footer')
</footer>
@fluxScripts
</body>
</html>
