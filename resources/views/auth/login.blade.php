@extends('layouts.app')

@section('title') Логин @endSection

@section('content')
    <div class="form-signin w-25 ml-auto mr-auto">
        <form method="post" action="{{ route('auth.login') }}" style="margin-top: 100px;">
            @if(session()->get('message'))
                <p class="notError">{{ session()->get('message') }}</p>
            @endif
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
            <label for="inputEmail" class="visually-hidden mb-3">Email</label>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control mb-3" placeholder="Email" required=""
                   autofocus="">
            <label for="inputPassword" class="visually-hidden mb-3">Пароль</label>
            <input type="password" name="inputPassword" id="inputPassword" class="form-control mb-3" placeholder="Пароль"
                   required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Войти</button>
            <a class="w-100 btn btn-lg btn-primary" href="{{ route('auth.create') }}">Регистрация</a>
        </form>
    </div>
@endSection