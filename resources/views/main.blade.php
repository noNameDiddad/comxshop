@extends('layouts.mn_hdr_ftr')

@section('title') Главная страница @endSection

@section('content')
<header class="main_header p-5 text-center bg-image"  style="background: url('{{asset('images/background_header.jpg')}}') no-repeat center top; background-size: cover; ">

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

    <div class="container-fluid text-center" style="background: url('images/catalog_background.png') no-repeat center center; background-size: cover; " >
        <h1 class="m-3">НОВИНКИ</h1>
        <div class="comx-row">
            @foreach($product as $item)
            <div class="comx-item">
                <div class="comx-item-image" style="background: url('{{ asset('/storage/'.$item->comx_img_1)}}')no-repeat center center; background-size: cover">
                    <a href="{{ route('comx-info', $item->id) }}">
                        <div class="comx-item-link"  >
        
                        </div>
                    </a>
                    <div class="comx-item-name">
                        <p class="comx-header">{{ $item->header }}</p>
                    </div>
                </div>
                <div class="comx-item-info">
                    <div class="comx-item-other">
                        <div class="comx-item-price">
                            <p class="">{{ $item->price_site }}</p>
                        </div>
                        <div class="comx-item-buy">
                            <a class="mb-3" href="{{ route('comx-buy', $item->id) }}"><img class="icons" src="{{asset('images/buy_cart.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach   
        </div>        
    </div>
@endSection