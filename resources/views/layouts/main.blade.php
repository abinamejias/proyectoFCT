<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <livewire:styles />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> 


    </head>
    <div class="container bg-dark fixed top" style="font-family:Play">
        <nav class="navbar navbar-dark bg-dark z-index:1">
            <a class="navbar-brand" style="color:rgb(255,255,255)" href="/index">SPOTIFY DEL CHINO</a>
            <form action="{{ route('home.logout') }}" method="post">
                @method('put')
                @csrf
                @if ((auth()->id()) == NULL)
                <a class="btn btn-outline-success my-2 my-sm-2 " href="/home" role="button">SIGN UP</a>
                @else
                <button type="submit" class="btn btn-outline-success my-2 my-sm-2 ">LOG OUT</a>
                @endif
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