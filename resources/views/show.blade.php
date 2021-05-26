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
                    <p hidden>{{ $c = 0 }}</p>
                    @foreach ($album['album']['tracks']['track'] as $track)
                    <p style="color:white;">
                        {{ $track['@attr']['rank'].'.'.$track['name'] }}
                    <form action="{{ route('lastsongs.all.store') }}" method="post">
                    @csrf
                    <input hidden name="name" id="name" value="{{ $track['name'] }}">
                    <input hidden name="user_id" id="user_id" value="{{ auth()->id() }}">
                    <button type="submmit"><a href="https://www.youtube.com/watch?v={{ $allStreams[0]['message'] }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M5.795 12.456A.5.5 0 0 1 5.5 12V4a.5.5 0 0 1 .832-.374l4.5 4a.5.5 0 0 1 0 .748l-4.5 4a.5.5 0 0 1-.537.082z"/>
                    </svg></a></button>
                    </form>

                    <form action="{{ route('music.all.store') }}" method="post">
                    @csrf
                    <input hidden name="name" id="name" value="{{ $track['name'] }}">
                    <input hidden name="url" id="url" value="{{ $track['url'] }}">
                    <input hidden name="artist" id="artist" value="{{ $track['artist']['name'] }}">
                    <input hidden name="duration" id="duration" value="{{ $track['duration'] }}">
                    <input hidden name="user_id" id="user_id" value="{{ auth()->id() }}">

                    <button type="submmit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg></button>

                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="https://www.youtube.com/watch?v={{ $allStreams[0]['message'] }}" data-a2a-title="Example Page Title">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>

                    <p hidden>{{ $c = $c + 5 }}</p>
                    </form>

                    <form action="{{ route('playlist.all.store') }}" method="post">
                    @csrf
                    <select class="form-control form-control-lg" id="playlists_id" name="playlists_id">
                    @foreach($playlists as $playlistItem)
                    @if ($playlistItem->user_id == auth()->id())
                    <option value= "{{ $playlistItem->id }}">{{ $playlistItem->name }}</option>
                    @endif
                    @endforeach
                    @foreach ($favtracks as $favtrackItem)
                    </select>
                    @if ($loop->last)
                        <input hidden name="favtracks_id" id="favtracks_id" value= "{{ $favtrackItem->id }}" >
                    @endif
                    @endforeach   
                    <button type="submmit">OK</button>
                    </form>
                    
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
                    </svg></a>
                    </p>
                    
                    @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection