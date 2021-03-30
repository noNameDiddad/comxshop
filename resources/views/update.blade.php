@extends('layouts.mn_hdr_ftr')

@section('title') Главная страница @endSection

@section('content')
<header class="p-5 text-center bg-image">

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
                    <a class="nav-link col-lg-2" aria-current="page" href="/login"><img src="{{asset('images/login.png')}}" alt=""></a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link col-lg-2" href="#"><img src="{{asset('images/cart.png')}}" alt=""></a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link disabled col-lg-2" href="#" tabindex="-1" aria-disabled="true"><img src="{{asset('images/facebook.png')}}" alt=""></a>
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


<div class="container">
    <form action="{{ route('admin.photo') }}" method="post" enctype="multipart/form-data" class="add_form">
        {{ csrf_field() }}
        <h1>Изменить комикс</h1>
        <input type="text" name="header" id="header" placeholder="Введите название комикса" value="{{ $product ->header }}" class="form-control m-3">
        <input type="text" name="price_site" id="price_site" placeholder="Введите цену" value="{{ $product ->price_site }}" class="form-control m-3">
        <input type="file" name="comx_img" id="comx_img" placeholder="Загрузите фото комикса" class="form-control m-3">
        <button type="submit" class="btn btn-warning m-3">Отправить</button>

    </form>
</div>
</header>
@endSection