<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Scripts -->
        <link href="{{ asset('js/script.js') }}" type="text/javascript">
        <script src="https://kit.fontawesome.com/798fccb154.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            #textoBuscador::placeholder {
                color: #FFF;
            }
        </style>
    </head>
    <body class="vh-100 w-100 pt-3" style="background-image: url('./img/fondo.png')">
        <div class="text-center mt-5 ">
            <img src="./img/logo.png" class="img-fluid mx-auto" alt="ThatzWeather" />
        </div>
        <div class="container d-flex justify-content-center align-items-center h-50">
        <x-buscador />
        </div>
    </body>
</html>
