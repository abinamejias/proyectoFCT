@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%); font-family:Play;">
<div class="container" style = "margin-top: 100px;">
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="row">
                <div class="col">
                <img src="{{ $album['album']['image'][5]['#text'] }}">
                </div>
                <div class="col">
                    <h1 style="color:white;">{{ $album['album']['name'] }}</h1>
                    <p style="color:white;">Artista: {{ $album['album']['artist'] }}</p>
                    <p style="color:white;">
                    Tracks:
                    @foreach ($album['album']['tracks']['track'] as $track)
                    <div class="col-3">
                    <div class="card bg-dark">
                    <div class="card-body">
                        {{ $track['name'] }}
                    </div>
                    </div>
                    </div>
                    @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection