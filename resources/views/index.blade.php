@extends('layouts.main')

@section('content')
<body style="background: linear-gradient(90deg, rgba(40,38,83,1) 34%, rgba(51,51,116,1) 75%, rgba(53,88,124,1) 100%);">
    <div class="container" style = "margin-top: 100px;">
    <center><h2 style = "margin-bottom: 35px; color:white;">Explora los géneros más escuchados:</h2></center>
        <div class="row">
            <div class="col">
                <div class="card h-100 bg-dark">
                <img src="https://www.colendri.lt/media/EshopProducts/Dua-Lipa-Future-Nostalgia-CD-cover-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title" style = "color:white;">NEW POP</h5>
                <p class="card-text" style = "color:white;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">¡Escucha ya!</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark">
                <img src="https://jamznet.com/wp-content/uploads/2020/12/AAP-Rocky-%E2%80%93-Flacko-Loko.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title" style = "color:white;">HIP HOP</h5>
                <p class="card-text" style = "color:white;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">¡Escucha ya!</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark">
                <img src="https://studiosol-a.akamaihd.net/uploadfile/letras/fotos/6/7/e/e/67eedafdce6febf3503e4f3ad78b6ccb.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title" style = "color:white;">R&B</h5>
                <p class="card-text" style = "color:white;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">¡Escucha ya!</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark">
                <img src="https://images.squarespace-cdn.com/content/v1/5cc66d5f5239586cbcc98511/1556834504931-LWV14GQZSVSM2VXJYNR5/ke17ZwdGBToddI8pDm48kJUlZr2Ql5GtSKWrQpjur5t7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UfNdxJhjhuaNor070w_QAc94zjGLGXCa1tSmDVMXf8RUVhMJRmnnhuU1v2M8fLFyJw/7+-+Tame+Impala+-+Neil+Krug.jpg?format=1500w" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title" style = "color:white;">INDIE</h5>
                <p class="card-text" style = "color:white;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">¡Escucha ya!</a>
                </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container" style = "margin-top: 50px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/G0JKdFjWkLA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection