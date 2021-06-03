@extends('layouts.app')

@section('title') Главная страница @endSection

@section('content')
    <div class="text-center">
        <div class="row g-0 border rounded overflow-hidden mt-5 mb-4 shadow-sm position-relative bg-light">
            <div class="col-5 d-none d-lg-block">
                <div class="showItemPhoto">
                    <div class="main_image">
                        <img src="{{ url('/public/storage/'.$product->comx_img_1)}}" id="changeableImg" alt="">
                    </div>
                    <div class="all_images">
                        <div class="comx_img_1">
                            <img src="{{ url('/public/storage/'.$product->comx_img_1)}}" onclick="changeImage(this.id)" id="img_1" alt="">
                        </div>
                        <div class="comx_img_2">
                            <img src="{{ url('/public/storage/'.$product->comx_img_2)}}" onclick="changeImage(this.id)" id="img_2" alt="">
                        </div>
                        <div class="comx_img_3">
                            <img src="{{ url('/public/storage/'.$product->comx_img_3)}}" onclick="changeImage(this.id)" id="img_3" alt="">
                        </div>
                        <div class="comx_img_4">
                            <img src="{{ url('/public/storage/'.$product->comx_img_4)}}" onclick="changeImage(this.id)" id="img_4" alt="">
                        </div>
                        <div class="comx_img_5">
                            <img src="{{ url('/public/storage/'.$product->comx_img_5)}}" onclick="changeImage(this.id)" id="img_5" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 p-4 d-flex flex-column position-static">
                <h3 class="mb-0"><p>{{ $product->header }}</p></h3>
                <strong class="d-inline-block mb-2 text-primary"><p>Цена: {{ $product->price_site }}</p></strong>
                <p class="card-text mb-auto text-break">{{ $product->comx_description }}</p>
                <a href="{{ url()->previous() }}">
                    <button type="button" class="button-hover-blue w-100 btn btn-lg btn-outline-primary">Назад</button>
                </a>
            </div>
        </div>
    </div>
@endSection