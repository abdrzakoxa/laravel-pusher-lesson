<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">Hello</div>

    <script>
        if (localStorage.getItem('userId') == null) {
            localStorage.setItem('userId',{{ auth()->user()->id }});
        }
    </script>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
