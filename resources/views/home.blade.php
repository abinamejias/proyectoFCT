@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%); color:white; font-family:Play;">
<div class="container">
    <div class="row" style="margin-top: 70px;">
        <div class="col-md-12">
            <div class="well well-sm">
                <div class="card-header"><h1>{{ __('Tu biblioteca de audio') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Tus playlists:</h1>
                    <form action="{{ route('home.all.store') }}" method="post">
                    @csrf
                    <label>Añadir playlist:</label>
                    <input type="text" name="name" id="name">
                    <input hidden type="text" name="user_id" id="user_id" value="1">
                    <button type="submmit" class="btn btn-primary">OK</button>
                    </form>
                    @forelse($playlists as $playlistItem)
                    <p><a href ="{{ route('playlist.show', $playlistItem->id) }}">{{ $playlistItem->name }}</a></p>
                    @empty
                    @endforelse
                    <p>-------------------------------------------------------------</p>
                    <h1>Tus canciones favoritas:</h1>
                    @forelse($favtracks as $favtrackItem)
                    @if ($favtrackItem->user_id == auth()->id())
                    <p>{{ $favtrackItem->name }} {{ $favtrackItem->artist }} {{ $favtrackItem->duration }}</p>
                    @endif
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
