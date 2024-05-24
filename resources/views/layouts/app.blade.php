<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto - @yield("title")</title>
  @vite('resources/css/app.css')
</head>

<body class="min-h-screen w-full flex flex-col">

  @include('partials.header')

  <main class="flex-1">
    <div class="w-full">
      <h1 class="text-xl">@yield('title')</h1>
    </div>
    <div></div>
  </main>

  @include('partials.navbar')

</body>

</html>