<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Estilos CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

