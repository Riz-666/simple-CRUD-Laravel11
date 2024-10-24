<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootsrap/css/bootstrap.css') }}">
    <script src="{{ asset('bootsrap/js/bootstrap.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}">
    <script src="{{ asset('font-awesome/js/all.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        @yield('konten');
    </div>
</body>
</html>