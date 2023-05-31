<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel CRUD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
</head>

<body class="antialiased justify-center">
    <div class="container">
        <div class="bg-black flex justify-center mx-96 py-2 rounded-b-3xl text-6xl text-yellow-600">
            <a href="/">Lara-CRUD</a>
        </div>
    </div>

    @auth
        <div class="mx-60 top-0">
            <div class="text-right">
                <form method="POST" action="/logout">
                    @csrf
                    <button
                        class="bg-red-500 hover:bg-red-300 rounded-xl text-white py-3 px-5 text-xs font-bold uppercase mx-1">Logout</button>
                </form>

            </div>
        </div>
    @endauth

    {{ $slot }}

</body>

</html>
