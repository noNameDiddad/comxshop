@extends('layouts.app')

@section('title') Создать продукт @endSection

@section('content')
    <div class="container-fluid p-3">
        <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data" class="add_form">
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
@endSection