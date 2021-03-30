@extends('layouts.mn_hdr_ftr')

@section('title') Главная страница @endSection

@section('content')
<header class="p-5  bg-image">

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
                    <a class="nav-link disabled col-lg-2" href="#"><img class="icons" src="{{asset('images/facebook.png')}}" alt=""></a>
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


<div class="container-fluid p-3">
    <form action="{{ route('admin.photo') }}" method="post" enctype="multipart/form-data" class="add_form">
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
        <h1>Добавить комикс</h1>
        <input type="text" name="publisher_manufacturer" id="publisher_manufacturer" placeholder="Издательство/Производитель" class="form-control mb-3">
        <input type="text" name="header" id="header" placeholder="Наименование" class="form-control mb-3">
        <input type="text" name="stock_availability" id="stock_availability" placeholder="На складе" class="form-control mb-3">
        <input type="text" name="price_site" id="price_site" placeholder="Цена на сайте" class="form-control mb-3">
        <input type="text" name="price_purchase" id="price_purchase" placeholder="Цена закупки" class="form-control mb-3">
        <input type="text" name="discount_rate" id="discount_rate" placeholder="Коэффициент скидки" class="form-control mb-3">
        <input type="text" name="ISBN" id="ISBN" placeholder="ISBN" class="form-control mb-3">
        <input type="text" name="RRP" id="RRP" placeholder="РРЦ" class="form-control mb-3">
        <input type="text" name="solded" id="solded" placeholder="Продано" class="form-control mb-3">
        <input type="text" name="year" id="year" placeholder="Год издания" class="form-control mb-3">
        <label for="comx_img_1" class="form-label">Главное изображение</label>
        <input type="file" name="comx_img_1" id="comx_img_1" class="form-control mb-3">
        <label for="comx_img_2" class="form-label">Второстепенное изображение №1</label>
        <input type="file" name="comx_img_2" id="comx_img_2" class="form-control mb-3">
        <label for="comx_img_3" class="form-label">Второстепенное изображение №2</label>
        <input type="file" name="comx_img_3" id="comx_img_3" class="form-control mb-3">
        <label for="comx_img_4" class="form-label">Второстепенное изображение №3</label>
        <input type="file" name="comx_img_4" id="comx_img_4" class="form-control mb-3">
        <label for="comx_img_5" class="form-label">Второстепенное изображение №4</label>
        <input type="file" name="comx_img_5" id="comx_img_5" class="form-control mb-3">
        <textarea name="comx_description" id="comx_description" cols="30" rows="10" placeholder="Введите описание комикса" class="form-control mb-3" style="resize: none;"></textarea>
        <button type="submit" class="btn btn-warning ">Отправить</button>
    </form>
</div>
</header>
@endSection

@section('table')

    <div class="container-fluid" >
        <h1 class="mt-15 mb-3 text-center">Новинки</h1>
        <div class="table-responsive">   
            <table class="table table-sm table-hover  table-condensed">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">id</th>
                    <th scope="col">Издательство/производитель</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">на складе</th>	
                    <th scope="col">цены</th>	
                    <th scope="col">цена закупки</th>	
                    <th scope="col">коэффицент скидки</th>	
                    <th scope="col">ISBN</th>	
                    <th scope="col">РРЦ</th>	
                    <th scope="col">Продано</th>	
                    <th scope="col">год издания</th>	
                    <th scope="col">Действия</th>	
                </tr>
                </thead>
                <tbody>
                    @foreach($product as $item)
                        <tr class="shopunit">
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->publisher_manufacturer }}</td>
                            <td>{{ $item->header }}</td>
                            <td>{{ $item->stock_availability }}</td>
                            <td>{{ $item->price_site }}</td>
                            <td>{{ $item->price_purchase }}</td>
                            <td>{{ $item->discount_rate }}</td>
                            <td>{{ $item->ISBN }}</td>
                            <td>{{ $item->RRP }}</td>
                            <td>{{ $item->solded }}</td>
                            <td>{{ $item->year }}</td>
                            <td>
                                <div class="">
                                    @auth
                                        <a class="btn btn-outline-primary mr-2" href="{{ route('comx-update', $item->id) }}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-outline-danger mr-2" href="{{ route('comx-delete', $item->id) }}"><i class="fas fa-minus-circle"></i></a>
                                        <a class="btn btn-outline-dark" href="{{ route('comx-info', $item->id) }}"><i class="fas fa-info"></i></a>
                                    @endauth
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endSection