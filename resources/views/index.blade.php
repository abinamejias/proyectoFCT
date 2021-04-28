@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%);">
    <div class="container" style = "margin-top: 100px;">
    <center><h2 style = "margin-bottom: 35px; color:white;">Explora los géneros más escuchados:</h2></center>
        <div class="row">
            <div class="col">
                @foreach ($topAlbums as $topAlbum)
                <div class="card bg-dark">
                <img src="https://www.colendri.lt/media/EshopProducts/Dua-Lipa-Future-Nostalgia-CD-cover-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title" style = "color:white;">NEW POP</h5>
                <p class="card-text" style = "color:white;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">¡Escucha ya!</a>
                </div>
                </div>
                @endforeach
            </div>
@endsection