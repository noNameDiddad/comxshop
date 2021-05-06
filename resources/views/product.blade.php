@extends('layouts.app')

@section('title') Главная страница @endSection

@section('content')
<header class="main_header p-5  mb-10 text-center bg-image"  style="background: url('{{asset('images/background_header.png')}}') no-repeat center center; background-size: cover; ">

@include('includes.header')
    
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