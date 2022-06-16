@extends('layout')

@section('content')

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container col-md-7">
            <h1 class="text text-light fs-2 fw-bold m-4">Drugs Overview </h1>
                <div class="row">
                    @foreach ($Galeries as $Galerie)
                        <div class="col-4">
                            <div class="card mb-4 box-shadow bg-dark text-light border-secondary">
                                <img src="/Bilder/Medikamente-Bilder/Medikament.jpg" class="card-img-top" alt="Medikament">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Galerie->name }}</h5>
                                    <p class="card-text">{{ $Galerie->author }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <td><a href="/view/{{ $Drug->id }}" class="btn btn-primary">View</a></td>
                                            <td><a href="/edit/{{ $Drug->id }}" class="btn btn-warning">Edit</a></td>
                                                
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