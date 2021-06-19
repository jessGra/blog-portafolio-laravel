<!DOCTYPE html>
<html>

<head>
    <title>Pág no encontrada</title>
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
    <div id="app" class="d-flex flex-column h-screen justify-content-between ">

            <div class="container px-4 py-4 " style="margin-top: 20vh">
                <div class="row">
                    <div class="col-12 col-lg-6 ">
                        <h1 class="display-4 text-primary">Página no encontrada</h1>
                        <p class="h4 text-secondary py-4">
                            Lamentamos los inconvenientes pero <strong class="text-primary">no podemos encontrar esta pagina en nuestro servidor.</strong>
                            verifica la <strong class="text-primary">url</strong> a ver si es la correcta o vuelve al inicio. ☺
                        </p>
                        <a class="btn btn-primary btn-block" href="/">Volver a Inicio</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid mb-4" src="/img/404.svg" alt="404-error">
                    </div>
                </div>
            </div>

        <footer class="bg-white text-black-50 text-center py-3 shadow">
            {{config('app.name')}} | Copyright @ {{date('Y')}}
        </footer>
    </div>
</body>

</html>
