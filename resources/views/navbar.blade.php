<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset ('bootstrap-5.1.0-dist\css\bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">

            <div class="navbar-brand">NVcare</div>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <form action="{{route('profile')}}" method="post">
                    @csrf
                    <li class="nav-item">
                    <input class="nav-link btn btn-white" type="submit" name="user_name" value="{{$user_name}}"/>
                </li>
                </form>
                
                
                <li class="nav-item">
                <a href="/">
                <input class="nav-link btn btn-white" type="submit" value="log out" />
                 </a>
                 </li>
                
                
            
                </ul>
            </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>