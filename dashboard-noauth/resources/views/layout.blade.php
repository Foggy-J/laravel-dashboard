<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page }} | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials._nav')
    @include('partials._hero')
    <div class="p-2">
        @yield('content')
    </div>
</body>
<footer>
    <div class="pt-2 pb-10 text-center">Copyright &copy; 2024 - <a href="https://github.com/Foggy-J/laravel-dashboard" target="_blank">Dashboard</a></div>
</footer>
</html>