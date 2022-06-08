@extends('layout')

@section('content')

<div class="container text-center col-md-12">

    <h1 class="text-light fw-bold m-4 fs-2"> Benutzerverwaltung Admin </h1>

    <div class="col-md-12">
        <table class="table table-dark table-striped align-middle fs-6 table-sm">
            <thead class="fs-5 fw-bold">
                <tr>
                    <th scope="col">Berechtigung</th>
                    <th scope="col">Benutzername</th>
                    <th scope="col">Bearbeiten</th>
                    <th scope="col">Löschen</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $User as $Users )
                <tr>
                    <td>{{ $Users->role }}</td>
                    <td>{{ $Users->username }}</td>
                    <td><a href="Photo" class="btn btn-success">Edit</a>
                    <td><a href="Photo" class="btn btn-danger">Delete</a>   
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection