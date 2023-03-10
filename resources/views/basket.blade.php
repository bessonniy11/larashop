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
                    <th>Название</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{ route('products', [$product->category->code, $product->code])}}">
                                <img height="56px" src="../../img/shop_01.jpg">
                                {{$product->name}}
                            </a>
                        </td>
                        <td><span class="badge text-dark">1</span>
                                <div class="btn-group form-inline">
                                    <form action="text" method="POST">
                                        <button type="submit" class="btn btn-danger" href=""><span
                                                class="glyphicon glyphicon-minus" aria-hidden="true">-</span></button>
                                        @csrf
                                    </form>
                                    <form action="{{ route('basket-add', $product)}}" method="POST">
                                        <button type="submit" class="btn btn-success"><span
                                                class="glyphicon glyphicon-plus" aria-hidden="true">+</span></button>
                                        @csrf
                                    </form>
                                </div>
                            </td>
                            <td>{{$product->price}} руб.</td>
                            <td>{{$product->price}} руб.</td>
                        </tr>
                    <tr>
                @endforeach
                    <td colspan="3">text</td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="form-inline pull-right">
                    <form method="POST" action="text">
                        @csrf
                        <label for="coupon">text</label>
                        <input class="form-control" type="text" name="coupon">
                        <button type="submit" class="btn btn-success">text</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <br>
                <div class="btn-group pull-right" role="group">
                    <a type="button" class="btn btn-success"
                    href="{{ route('basket-place') }}">text</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
