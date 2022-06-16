<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Layout Web.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('nav')

    @yield('content')

    <!-- Logout Button -->
    <div class="logout" id="logout">
    <button id="logoutnbtn" class="logout btn"><a href="#" onclick="document.querySelector('#logoutForm').submit()">Logout</a></button>
    </div>

    <!-- Logout Fortify -->
    <form method="POST" action="/logout" id="logoutForm">
    @csrf
    </form>

    <!-- Login Button -->
    <div class="login" id="login">
    <button id="loginbtn" class="login btn"><a href="/login">Login</a></button>
    </div>

    <!-- Login Button -->
    <div class="register" id="register">
    <button id="registerbtn" class="register btn"><a href="/register">Register</a></button>
    </div>

    <!-- Create cards Button -->
    <div class="create" id="create">
    <button id="createbtn" class="create btn"><a href="/galeries/create">Create new Galerie</a></button>
    </div>


</body>
</html>
