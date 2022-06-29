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
                @foreach( $Users as $User )
                <tr>
                    <td>{{ $User->role_id }}</td>
                    <td>{{ $User->username }}</td>
                    <td><a href="/admin/edit/{{ $User->id }}" class="btn btn-success">Edit</a>
                        
                      <form method="Post" action="/delete_user/{{ $user->id}}">
                            @method('delete')
                            @csrf
                             <button class="btn btn-danger"> Delete </button>   </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection