@extends('layout')

@section('content')
    <main role="main">
        @csrf
        <section class="jumbotron text-center">
            <div class="container col-md-7">
                <h1 class="text text-light fs-2 fw-bold m-4">Photos </h1>
                <div class="row">
                    @foreach ($Photos as $Photo)
                        <div class="col-4">
                            <div class="card mb-4 box-shadow bg-dark text-light border-secondary">
                                <img src="{{ asset('Bilder/' . $Photo->path) }}" class="card-img-top" height="200px"
                                    alt="Galerie">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Photo->imagename }}</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <td><a href="/image/view/{{ $Photo->id }}" class="btn btn-primary">View</a>
                                            </td>
                                            <td><a href="/image/edit/{{ $Photo->id }}" class="btn btn-success">Edit</a>
                                            </td>
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
