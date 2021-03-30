@extends('layouts.mn_hdr_ftr')

@section('title') Главная страница @endSection

@section('content')
<header class="main_header p-5 text-center bg-image"  style="background: url('{{asset('images/background_header.png')}}') no-repeat center center; background-size: cover; ">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark row header_fixed_bar">
    <div class="container-fluid row ">
        <a class="navbar-brand col-lg-2" href="#"><img src="{{asset('images/Logo.png')}}" alt=""></a>
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
                    <a class="nav-link disabled col-lg-2" href="#" tabindex="-1" aria-disabled="true"><img class="icons" src="{{asset('images/facebook.png')}}" alt=""></a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link col-lg-2" href="#"><img class="icons" src="{{asset('images/vk.png')}}" alt=""></a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link col-lg-2" href="#" tabindex="-1" aria-disabled="true"><img class="icons" src="{{asset('images/instagramm.png')}}" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="w-100 buttons_nav row mb-3 text-center">
    <a href="#" class="col m-3"><button class="w-100">КАТАЛОГ</button></a>
    <a href="#" class="col m-3"><button class="w-100">НОВИНКИ</button></a>
    <a href="#" class="col m-3"><button class="w-100">БЕСТСЕЛЛЕРЫ</button></a>
    <a href="#" class="col m-3"><button class="w-100">АКЦИИ</button></a>
    <a href="#" class="col m-3"><button class="w-100">ПОДАРКИ И УКРАШЕНИЯ</button></a>
</div>


</header>
@endSection

@section('table')

    <div class="container-fluid text-center" >
        <h1 class="m-3">НОВИНКИ</h1>
        <div class="row g-4 mb-3">
            <div style="display: none">
                {{$i=0}}
            </div>
            @foreach($product as $item)
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2 text-center">
                <div class="card h-100">
                    <div class="catalog_img overflow-hidden">
                        <a href="{{ route('comx-info', $item->id) }}">
                            <img src="{{ asset('/storage/'.$item->comx_img_1)}}" class="img-fluid img-thumbnail" alt="">
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">{{ $item->header }}</h5>
                        <p class="card-text">{{ $item->price_site }}</p>
                            {{-- @auth --}}
                            <a class="btn btn-success mb-3" href="{{ route('comx-buy', $item->id) }}">В корзину</a>
                            {{-- @endauth --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>    
    </div>
@endSection