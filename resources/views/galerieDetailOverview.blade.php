@extends('layout')

@section('content')

    <main role="main">
@csrf
        <section class="jumbotron text-center">
            <div class="container col-md-7">
            <h1 class="text text-light fs-2 fw-bold m-4">Galeries von Autor  </h1>
                <div class="row">
                    @foreach ($Galeries as $Galerie)
                        <div class="col-4">
                            <div class="card mb-4 box-shadow bg-dark text-light border-secondary">
                                <img src="/Bilder/Galerie/Bild1.jpg" class="card-img-top" alt="Galerie">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Galerie->name }}</h5>
                                    <p class="card-text">{{ $Photo->name }}</p>
                                    <p class="card-text">{{ $Galerie->autor }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <td><a href="/galeriesOverviewView/{{ $Galerie->id }}" class="btn btn-primary">View</a></td>
                                            <td><a href="/galeriesOverviewEdit/{{ $Galerie->id }}" class="btn btn-warning">Edit</a></td>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

@endsection