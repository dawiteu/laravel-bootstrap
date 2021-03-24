<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel - Bootstrap</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h3 class="text-center text-danger">Test</h3>

        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
