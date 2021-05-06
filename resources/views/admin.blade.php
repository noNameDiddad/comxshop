@extends('layouts.app')

@section('title') Главная страница @endSection

@section('nav_header_bar') @include('includes.header') @endSection

@section('content')
<header class="p-5  bg-image">



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