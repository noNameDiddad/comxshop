@extends('layouts.app')

@section('title') Регистрация @endSection

@section('content')
    <div class="form-signin w-25 ml-auto mr-auto">
        <form method="post" action="{{ route('auth.register') }}">
            @if($message)
                <p class="error">{{ json_encode($message, 422) }}</p>
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
            <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
            <label for="inputName" class="visually-hidden mb-3">Имя</label>
            <input type="text" name="inputName" id="inputName" class="form-control mb-3" placeholder="Имя" required=""
                   autofocus="" value="{{ old('inputName') }}">
            <label for="inputEmail" class="visually-hidden mb-3">Email</label>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control mb-3" placeholder="Email" required=""
                   autofocus="" value="{{ old('inputEmail') }}">
            <label for="inputPassword" class="visually-hidden mb-3">Пароль</label>
            <input type="password" name="inputPassword" id="inputPassword" class="form-control mb-3" placeholder="Пароль"
                   required="" value="{{ old('inputPassword') }}">
            <label for="inputRepeatPassword" class="visually-hidden mb-3">Повторите пароль</label>
            <input type="password" name="inputRepeatPassword" id="inputRepeatPassword" class="form-control mb-3"
                   placeholder="Повторите пароль" required="" value="{{ old('inputRepeatPassword') }}">
            <button class="w-100 btn btn-lg mt-3 btn-primary" type="submit">Зарегестрироваться</button>
        </form>
    </div>
@endSection