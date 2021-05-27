@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%); color:white; font-family:Play;">
<div class="container">
    <div class="row" style="margin-top: 70px;">
        <div class="col-md-12">
        @foreach ($users as $usersItem)
        @if(auth()->id()!=$usersItem->id)
        <p>{{ $usersItem->name }}</p>
        <form action="{{ route('follows.all.store') }}" method="post">
            @csrf
            <input hidden type="text" name="followinguser_id" id="followinguser_id" value="{{ auth()->id() }}">
            <input hidden type="text" name="followeduser_id" id="followeduser_id" value="{{ $usersItem->id }}">
            <button type="submmit" class="btn btn-primary">Seguir</button>
        </form>
        @endif
        @endforeach
        </div>
    </div>
</div>
</body>
@endsection