@extends('layout')

@section('content')

<div>
<section>
    <h2 class="opacity-75 text-center fs-2 text-light m-4" >Login</h2>
        <div class="col-md-4 container">
            <form method="POST" action="/login">
            @csrf
                <br>
                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light" style="colour: hsl(179, 72%, 50%);">Username</label>
                    <div class="col-sm-10">
                    <input type="text" class="opacity-50 form-control fs-6" id="username" name="username">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label fs-6 text-light" style="colour: hsl(179, 72%, 50%);">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="opacity-50 form-control" id="password" name="password">
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

                <button type="submit" id="login" class="btn btn-primary">Login</button>

            </form>
</div>
</section>

</div>

@endsection