@extends('layouts.app')

@section('title') Главная страница @endSection

@section('content')
    <div class="text-center w-100 mt-2">
        <a class="btn btn-outline-primary" href="{{ route('admin.create') }}">Создать запись</a>
    </div>
    <div class="container-fluid" >
        <div class="table-responsive mt-1">
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
                <tbody class="text-center">
                    @foreach($products as $product)
                        <tr class="shopunit">
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->publisher_manufacturer }}</td>
                            <td>{{ $product->header }}</td>
                            <td>{{ $product->stock_availability }}</td>
                            <td>{{ $product->price_site }}</td>
                            <td>{{ $product->price_purchase }}</td>
                            <td>{{ $product->discount_rate }}</td>
                            <td>{{ $product->ISBN }}</td>
                            <td>{{ $product->RRP }}</td>
                            <td>{{ $product->solded }}</td>
                            <td>{{ $product->year }}</td>
                            <td>
                                <div>
                                    @auth
                                        <a class="btn btn-outline-primary" href="{{ route('admin.edit', $product) }}"><i class="fas fa-edit"></i></a>
                                        <a class="d-inline-block">
                                            <form action="{{ route('admin.destroy',  $product) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger" ><i class="fas fa-minus-circle"></i></button>
                                            </form></a>
                                        <a class="btn btn-outline-dark" href="{{ route('admin.show',  $product->id) }}"><i class="fas fa-info"></i></a>
                                    @endauth
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $products->links() }}
@endSection