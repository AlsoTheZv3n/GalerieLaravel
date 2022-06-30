@extends('layout')

@section('content')
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container col-md-7">
                <h1 class="text text-light fs-2 fw-bold m-4">Photos</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4 box-shadow bg-dark text-light border-secondary">
                            <img src="{{ asset('Bilder/' . $photo->path) }}" class="card-img-top" alt="Galerie">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
