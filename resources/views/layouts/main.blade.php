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
        <livewire:styles />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> 


    </head>
    <div class="container bg-dark fixed top">
        <nav class="navbar navbar-dark bg-dark z-index:1">
            <a class="navbar-brand" style="color:rgb(255,255,255)" href="http://localhost:8000/Inicio?">SPOTIFY DEL CHINO</a>
            <form>
                <a class="btn btn-outline-success my-2 my-sm-2 " href="http://localhost:8000/home" role="button">SIGN UP</a>
            </form>
        </nav>
        <form>
                <livewire:search-dropdown>
        </form>
    </div>
    @yield('content')
    <livewire:scripts/>
    </body>
</html>