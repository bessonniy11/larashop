@extends('master')


@section('content')
<div class="container py-5">
    <div class="row">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="name-table-colum name-table-colum-first">Название</th>
                    <th class="name-table-colum">Количество</th>
                    <th class="name-table-colum">Цена</th>
                    <th class="name-table-colum">Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{ route('products', [$product->category->code, $product->code])}}">
                                <img height="56px" src="../../img/shop_01.jpg" style="margin-right: 5px;">
                                {{$product->name}}
                            </a>
                        </td>
                        <td>
                            <span class="badge text-dark">{{$product->pivot->count}}</span>
                                <div class="btn-group form-inline">
                                    <form action="{{ route('basket-remove', $product)}}" method="POST">
                                        <button type="submit" class="btn btn-danger" style="margin-right: 5px;">
                                            <span class="glyphicon glyphicon-minus" aria-hidden="true">-</span>
                                        </button>
                                        @csrf
                                    </form>
                                    <form action="{{ route('basket-add', $product)}}" method="POST">
                                        <button type="submit" class="btn btn-success">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true">+</span>
                                        </button>
                                        @csrf
                                    </form>
                                </div>
                            </td>
                            <td>{{$product->price}} руб.</td>
                            <td>{{$product->getPriceForCount()}} руб.</td>
                        </tr>
                    <tr>
                @endforeach
                </tr>
                    <td colspan="3">Общая стоимость</td>
                    <td>{{ $order->getFullPrice() }} руб.</td>
                </tr>
                </tbody>
            </table>
            @if ($order->products)
            <div class="row">
                <div class="form-inline pull-right">
                    <form method="POST" action="text">
                        @csrf
                        <label  class="mb-3" for="coupon">Промокод</label>
                        <input class="form-control mb-3 w-25" type="text" name="coupon">
                        <button type="submit" class="btn btn-success">Проверить</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <br>
                <div class="btn-group pull-right" role="group">
                    <a type="button" class="btn btn-success"
                    href="{{ route('basket-place') }}">К оформлению заказа</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
