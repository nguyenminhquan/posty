<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Posty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(Route::current()->getName() == 'home') active @endif">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(Route::current()->getName() == 'dashboard') active @endif">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashbard</a>
                </li>
                <li class="nav-item @if(Route::current()->getName() == 'posts') active @endif">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">User Name</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</span></a>
                </li>
                <li class="nav-item @if(Route::current()->getName() == 'register') active @endif">
                    <a class="nav-link" href="{{ route('register') }}">Register</span></a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>
