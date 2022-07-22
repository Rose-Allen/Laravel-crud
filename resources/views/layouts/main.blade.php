<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route("home.index")}}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("post.index")}}">Посты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("contact.index")}}">Контакты</a>
                    </li>
                </ul>
            </div>

    </nav>
</div>
<div class="container">
        @yield("content")
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
