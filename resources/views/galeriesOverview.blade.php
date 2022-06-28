@extends('layout')

@section('content')

    <main role="main">
@csrf
        <section class="jumbotron text-center">
            <div class="container col-md-7">
            <h1 class="text text-light fs-2 fw-bold m-4"> Galeries  </h1>
                <div class="row">
                    @foreach ($Galeries as $Galerie)
                        <div class="col-4">
                            <div class="card mb-4 box-shadow bg-dark text-light border-secondary">
                                <img src="{{ asset('Bilder/' . $Galerie->image_path) }}" class="card-img-top" height="200px" alt="Galerie">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Galerie->galeriename }}</h5>
                                    <p class="card-text">{{ $Galerie->user->username }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <td><a href="/photos/{{ $Galerie->id }}" class="btn btn-primary">View</a></td>
                                            <td><a href="/galeries/edit/{{ $Galerie->id }}" class="btn btn-success">Edit</a></td>
                                            <td><a href="/photos/create/{{ $Galerie->id }}" class="btn btn-warning">Create</a></td>
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