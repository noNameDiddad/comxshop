@extends('layouts.app')

@section('title') Главная страница @endSection

@section('nav_header_bar') @include('includes.header') @endSection

@section('content')
<header class="p-5 text-center bg-image">



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