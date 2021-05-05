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

                    Tus favoritos:
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
