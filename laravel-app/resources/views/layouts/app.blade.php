<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}" class="scroll-smooth">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title", "strenght4u")</title>

    <!-- Scripts -->
    @vite(["resources/css/app.css", "resources/js/nav_handlers.js", "resources/js/update-indicator.js"])
    @stack("scripts") <!-- For additional JS specific to some pages -->
  </head>

  <body class="bg-primary-grey-100 font-dm">
    <div class="bg-white px-4 py-4 text-xl font-bold">
      <a href="{{ route("index") }}">strength4u</a>
    </div>
    @include("partials.header") <!-- Always included header -->

    @yield("content") <!-- Main content varies -->

    @include("partials.footer") <!-- Always included footer -->
  </body>

</html>
