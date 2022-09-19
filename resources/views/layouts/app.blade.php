<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }} | PENS</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsrap-icon@1.5.0/font/bootstrap-icons.css"
        
        {{ $styles }}
        

    </head>
    <body>

        <x-navbar>

        </x-navbar>

        {{ $slot }}

        <script src={{ asset('js/bootstrap.min.js') }}></script>

    </body>
</html>