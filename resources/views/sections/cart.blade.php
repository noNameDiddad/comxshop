@extends('layouts.app')

@section('content')
    <div class="mb-4 d-flex justify-content-between align-items-center text-white">
        <div class="fs-2">
            Корзина
        </div>

        @if(count($cart))
            <a class="btn btn-primary" href="{{route('cart.create')}}">Очистить корзину</a>
        @endif
    </div>
    @if(count($cart))
        <table class="table table-striped table-light text-center">
            <thead>
            <tr>
                <th class="col-4">Название</th>
                <th class="col-4">Цена</th>
                <th class="col-4">Действие</th>
            </tr>
            </thead>
            @foreach($cart as $product)
                <tr>
                    <td class="align-middle">{{$product->product->header}}</td>
                    <td class="align-middle">{{$product->product->price_site}} руб.</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{route('cart.destroy',$product->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <th class="align-middle">Кол-во товаров {{count($cart)}} шт.</th>
                <th class="align-middle">Итоговая цена {{$sum}} руб.</th>
                <th>
                    <form action="{{route('order.store')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Оформить заказ</button>
                    </form>
                </th>
            </tr>
        </table>
    @else
        <h3 class="text-white">Корзина пуста</h3>
    @endif

@endsection
