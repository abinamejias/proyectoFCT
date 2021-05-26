@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%); font-family:Play;">
    {{ $c=0 }}
    <form action="{{ route('apitodb.all.store') }}" method="post" id="form">
    @foreach ($allAlbums as $album)
    {{ $c=$c+1 }}
    @csrf
    <input hidden name="name" id="name.{{ $c }}" value="{{ $album['name'] }}">
    <input hidden name="artist" id="artist.{{ $c }}" value="{{ $album['artist']['name'] }}">
    <input hidden name="image" id="image.{{ $c }}" value="{{ $album['image'][3]['#text'] }}">
    @endforeach
    </form>
    <script type="text/javascript">
    for (var i = 0; i < 10; i++) {
    function formAutoSubmit () {
            var frm = document.getElementById("form");
            frm.submit();
    }
    window.onload = formAutoSubmit;
    }
    </script>
</body>
@endsection