<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">


    </head>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" style="color:rgb(255,255,255)" href="http://localhost:8000/Inicio?">SPOTIFY DEL CHINO</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Search</button>
            </form>
            <form>
                <a class="btn btn-outline-success my-2 my-sm-2 " href="http://localhost:8000/Registro" role="button">SING UP</a>
            </form>
        </nav>
    @yield('content')
    </body>
</html>