<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="flex min-h-screen w-full flex-col">
    @livewire('header')

    <main class="flex-1">
        <div class="w-full">
            <h1 class="bg-indigo-500 p-3 text-center text-3xl font-extrabold uppercase">
                @yield('title')
            </h1>
        </div>
        <main class="w-full px-4 mt-2 mb-4">
            @yield('content')
        </main>
    </main>

    @include('partials.footer')
</body>

</html>
