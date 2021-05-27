@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%); color:white; font-family:Play;">
    <div class="container" style = "margin-top: 100px;">
    <center><h2>Esto es lo más escuchado en {{ $addrDetailsArr['geoplugin_countryName'] }}:</h2></center>
        <div class="row">
@foreach($geoAlbums as $track)
<div class="col-3">
                <div class="card bg-dark">
                <a href="{{ route('music.show',['album' => $track['name'],'artist' => $track['artist']['name']] ) }}"><img src="{{ $track['image'][2]['#text'] }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <a href="{{ route('music.show',['album' => $track['name'],'artist' => $track['artist']['name']] ) }}"><h5 class="card-title" style = "color:white;">{{ $track['name'] }}</h5></a>
                <p class="card-text" style = "color:white;">{{ $track['artist']['name'] }}</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
@endsection