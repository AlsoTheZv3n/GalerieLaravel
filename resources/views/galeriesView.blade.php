
@extends('layout')

@section('content')

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container col-md-7">
            <h1 class="text text-light fs-2 fw-bold m-4">Galerie Photo </h1>
                <div class="row">
                    @foreach ($Photos as $Photo)
                        <div class="col-4">
                            <div class="card mb-4 box-shadow bg-dark text-light border-secondary">
                                <img src="/Bilder/Medikamente-Bilder/Medikament.jpg" class="card-img-top" alt="Medikament">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Photo->name }}</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <td><a href="/return/{{ $Galerie->id }}" class="btn btn-warning">Return to Galerie</a></td>    
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