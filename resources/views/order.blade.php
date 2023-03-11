@extends('layouts.master')

@section('title', 'Оформление заказа')

@section('content')
    <div class="container py-5 order-form">
        <h1>Оформление заказа</h1>
        <div class="row justify-content-center">
                <p>Сумма заказа: <b>{{ $order->getFullPrice() }} руб.</b></p>
                <form action="{{ route('basket-confirm') }}" method="POST">
                    <div>
                        <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться</p>

                        <div class="content">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                                <div class="">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Телефон: </label>
                                <div class="">
                                    <input type="text" name="phone" id="phone" required value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            @guest
                                <!-- <div class="form-group">
                                    <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                    <div class="">
                                        <input type="text" name="email" id="email" required value="" class="form-control">
                                    </div>
                                </div>
                                <br> -->
                                <!-- <div class="form-group">
                                    <label for="name" class="control-label col-lg-offset-3">Адрес доставки:</label>
                                    <div class="">
                                        <textarea name="address" id="" cols="30" rows="4" class="form-control" style="resize: none;"></textarea>
                                    </div>
                                </div> -->
                            @endguest
                        </div>
                        <br>
                        @csrf
                        <input type="submit" class="btn btn-success" value="Оформить">
                    </div>
                </form>
            </div>
    </div>
@endsection
