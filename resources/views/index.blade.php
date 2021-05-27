@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%); font-family:Play;">
    <div class="container" style = "margin-top: 100px;">
    <center><h2 style = "margin-bottom: 35px; color:white;">Explora lo más escuchado:</h2></center>
        <div class="row">
            @foreach ($topAlbums as $album)
            <div class="col-3">
                <div class="card bg-dark">
                <a href="{{ route('music.show',['album' => $album['name'],'artist' => $album['artist']['name']] ) }}"><img src="{{ $album['image'][3]['#text'] }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <a href="{{ route('music.show',['album' => $album['name'],'artist' => $album['artist']['name']] ) }}"><h5 class="card-title" style = "color:white;">{{ $album['name'] }}</h5></a>
                <p class="card-text" style = "color:white;">{{ $album['artist']['name'] }}</p>
                </div>
                </div>
            </div>
            @endforeach
            <div class="col-3">
                <div class="card bg-dark">
                <a href="/geolocation"><img src="https://media.tenor.com/images/fcddc432832e92bbff76e2ed787d45c9/tenor.gif" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <a href="/geolocation"><h5 class="card-title" style = "color:white;">RADAR</h5></a>
                <p class="card-text" style = "color:white;">Explora exitos en tu país</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection