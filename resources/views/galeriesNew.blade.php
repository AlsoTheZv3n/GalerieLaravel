@extends('layout')

@section('content')
    <div class="container text-center col-md-12">

        <h1 class="text-light fw-bold m-4 fs-2"> Create Galeries </h1>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="md-6">

                    <label for="createimage" class="form-label col-sm-2 text-light fs-5">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-6">
                    <label for="createname" class="form-label col-sm-2 text-light fs-5">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
@endsection
