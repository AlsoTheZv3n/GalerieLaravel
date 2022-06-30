@extends('layout')

@section('content')

    <div>
        <section>
            <h2 class="opacity-75 fs-2 text-light text-center m-4">Register</h2>
            <div class="col-md-4 container">
                <form method="POST" action="/register">
                    @csrf
                    <br>
                    <div class="row mb-3">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light"
                            style="colour: hsl(179, 72%, 50%);">Firstname</label>
                        <div class="col-sm-10">
                            <input type="text" class="opacity-50 form-control" id="firstname" name="firstname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light"
                            style="colour: hsl(179, 72%, 50%);">Lastname</label>
                        <div class="col-sm-10">
                            <input type="text" class="opacity-50 form-control" id="lastname" name="lastname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light"
                            style="colour: hsl(179, 72%, 50%);">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="opacity-50 form-control" id="username" name="username">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light"
                            style="colour: hsl(179, 72%, 50%);">Role</label>
                        <div class="col-sm-10">
                            <select class="form-select opacity-50" name="role_id" id="role_id">
                                <option selected>Choose Role ...</option>
                                <option value="1">Admin</option>
                                <option value="2">Benutzer</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light"
                            style="colour: hsl(179, 72%, 50%);">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="opacity-50 form-control" id="password" name="password">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light"
                            style="colour: hsl(179, 72%, 50%);">Confirm password</label>
                        <div class="col-sm-10">
                            <input type="password" class="opacity-50 form-control" id="password_confirmation"
                                name="password_confirmation">
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="row mb-3 mt-3">
                            <div class="col-sm-12 alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <button type="submit" id="submit-button" class="btn btn-primary">Register</button>

                </form>
            </div>
        </section>

    </div>

@endsection
