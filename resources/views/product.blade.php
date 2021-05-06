@extends('layouts.app')

@section('title') Главная страница @endSection

@section('content')
<header class="main_header p-5  mb-10 text-center bg-image"  style="background: url('{{asset('images/background_header.png')}}') no-repeat center center; background-size: cover; ">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark row header_fixed_bar">
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
                            <a class="nav-link col-lg-2" aria-current="page" href="/login"><img src="{{asset('images/login.png')}}" alt=""></a>
                        @endif
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link disabled col-lg-2" href="#" tabindex="-1" aria-disabled="true"><img src="{{asset('images/facebook.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link col-lg-2" href="#"><img src="{{asset('images/cart.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link col-lg-2" href="#"><img src="{{asset('images/vk.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link col-lg-2" href="#" tabindex="-1" aria-disabled="true"><img src="{{asset('images/instagramm.png')}}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


    <div class="text-center" >
        <div class="row g-0 border rounded overflow-hidden mt-5 mb-4 shadow-sm position-relative bg-light">
            <div class="col-5 d-none d-lg-block">
                <img src="{{ asset('/storage/'.$product->comx_img_1)}}" alt="" class="img-fluid card-img-top" style="width: 70%">
            </div>
            <div class="col-7 p-4 d-flex flex-column position-static">
                <h3 class="mb-0"><p>{{ $product->header }}</p></h3>
                <strong class="d-inline-block mb-2 text-primary"><p>Цена: {{ $product->price_site }}</p></strong>
                <p class="card-text mb-auto text-break">{{ $product->comx_description }}</p>
                @if (Auth::check())
                    @if ( Auth::user()->role == 0)
                        <a href="/admin">
                            <button type="button" class="button-hover-blue w-100 btn btn-lg btn-outline-primary">Назад</button>
                        </a>
                    @else
                        <a href="/">
                            <button type="button" class="button-hover-blue w-100 btn btn-lg btn-outline-primary">Назад</button>
                        </a>
                    @endif
                @else
                    <a href="/">
                        <button type="button" class="button-hover-blue w-100 btn btn-lg btn-outline-primary">Назад</button>
                    </a>
                @endif
                
            </div>
        </div>
    </div>
    
</header>
@endSection