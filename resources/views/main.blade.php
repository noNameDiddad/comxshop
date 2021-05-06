@extends('layouts.app')

@section('title') Главная страница @endSection

@section('nav_header_bar') @include('includes.header') @endSection

@section('header')
    <header class="main_header p-5 text-center bg-image"  style="background: url('{{asset('images/background_header.jpg')}}') no-repeat center top; background-size: cover; ">
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

    <div class="container-fluid text-center"  >
        <h1 class="p-3">НОВИНКИ</h1>
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