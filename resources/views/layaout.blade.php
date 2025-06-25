<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        @yield('header')
    </header>
    <main class="bg-sky-300">
        @yield('body')
    </main>
    <footer>
        @yield('footer');
    </footer>
</body>
</html>