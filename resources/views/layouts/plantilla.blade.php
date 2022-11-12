<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">--}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- favicon --}}
    {{-- estilos --}}
</head>
<body class="bg-purple-400 ">

    {{-- header --}}
    {{-- nav --}}
    @yield('content')

    {{-- footer --}}

    {{-- script --}}

</body>
</html>
