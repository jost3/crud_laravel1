<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
    <!-- Buscador de la página -->
    <div class="buscad">
        <form method="GET" action="">
            <input type="text" name="search1" placeholder="Buscar">
            <div class="btn">
                <i class="fa fa-search"></i>
            </div>
        </form>
    </div>

    <div class="tabla_libros">
        <div class="titulos">ID</div>
        <div class="titulos">TITULO</div>
        <div class="titulos">AUTOR</div>
        <div class="titulos">SECCION</div>
        <div class="titulos">ELIMINAR</div>

    </div>
    </body>
</html>
