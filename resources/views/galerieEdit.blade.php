@extends('layout')

@section('content')
    <div class="container text-center col-md-12">

        <h1 class="text-light fw-bold m-4 fs-2"> Edit Galerie </h1>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <div class="md-6">

                    <div class="mb-6">
                        <label for="createname" class="form-label col-sm-2 text-light fs-5">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $galerie->galeriename }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
@endsection
