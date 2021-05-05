<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="text-center">
    <nav class="navbar text-center navbar-expand-md navbar-dark fixed-top bg-dark row header_fixed_bar">
        <div class="container-fluid row ">
            <a class="navbar-brand col-lg-2" href="/"><img src="{{asset('images/Logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-lg-4 offset-lg-2" id="navbarCollapse">
                <form class="d-flex col-lg-12">
                    <input class="search" type="search" aria-label="Search">
                    <button class="button search_btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="collapse navbar-collapse col-lg-3 offset-lg-1" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active pl-3">
                        @if (Auth::check())
                            <a class="nav-link col-lg-2" aria-current="page" href="/logout">Выход</a>
                        @else
                            <a class="nav-link col-lg-2" aria-current="page" href="/login"><img class="icons" src="{{asset('images/login.png')}}" alt=""></a>
                        @endif
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link col-lg-2" href="#"><img class="icons" src="{{asset('images/cart.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link col-lg-2" href="#"><img class="icons" src="{{asset('images/facebook.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link col-lg-2" href="#"><img class="icons" src="{{asset('images/vk.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link col-lg-2" href="#"><img class="icons" src="{{asset('images/instagramm.png')}}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="form-signin w-25 ml-auto mr-auto" style="margin-top: 100px;">
    <form method="post" action="/login">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error) 
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ csrf_field() }}
        <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
        <label for="inputEmail" class="visually-hidden">Email</label>
        <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
        <label for="inputPassword" class="visually-hidden">Пароль</label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Пароль" required="">
        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Войти</button>
        <a class="w-100 btn btn-lg btn-primary" href="/register">Регистрация</a>
    </form>
    </main>
</body>
</html>