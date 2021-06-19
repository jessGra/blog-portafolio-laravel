<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
   
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials/nav')
        </header>
        <main class="py-4">
            @include('partials/session-status')
            @yield('content')
        </main>
        <footer class="bg-white text-black-50 text-center py-3 shadow">
            {{config('app.name')}} | Copyright @ {{date('Y')}}
        </footer>
    </div>
</body>

</html>
