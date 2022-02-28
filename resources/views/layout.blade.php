<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Photo Gallery</title>
</head>

<body class="antialiased">
    <script src="{{ asset('js/jquery-3.5.1.js') }}">
    </script>
    <script src="{{ asset('js/popper.js') }}">
    </script>
    <script src="{{ asset('js/bootstrap4.js') }}">
    </script>
    @yield('content')

</body>

</html>
