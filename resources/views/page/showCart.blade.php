@extends('master')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/slide/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span>
                        <span>Cart</span></p>
                    <h1 class="mb-0 bread">My Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($cart)

                                @forelse($cart->items as $product)
                                    <tr class="text-center">
                                        <td class="product-remove"><a
                                                href="{{ route('delCart',$product['item']['id']) }}"><span
                                                    class="ion-ios-close"></span></a></td>

                                        <td class="image-prod">
                                            <div class="img"
                                                 style="background-image:url(images/product/{{$product['item']['image']}});"></div>
                                        </td>

                                        <td class="product-name">
                                            <h3>{{ $product['item']['name'] }}</h3>
                                            <p>{{ $product['item']['description'] }}</p>
                                        </td>

                                        <td class="price">
                                            @if($product['item']['promotion_price']==0)
                                                <span class="price-sale">{{ number_format($product['item']['unit_price']) }} VND</span>
                                            @else
                                                <span class="price-sale">{{ number_format($product['item']['promotion_price']) }} VND</span>
                                            @endif</td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity"
                                                       class="quantity form-control input-number"
                                                       value="{{$product['qty']}}" min="1" max="100">
                                            </div>
                                        </td>

                                        <td class="total">
                                            {{ $product['qty'] }}*<span>@if($product['item']['promotion_price'] == 0)
                                                    {{ number_format($product['item']['unit_price']) }}
                                                @else {{ number_format($product['item']['promotion_price']) }}@endif</span>
                                        </td>
                                    </tr><!-- END TR-->

                                @empty

                                @endforelse

                            @else
                                <tr>
                                    <td colspan="6">Khong co du lieu</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if($cart)
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>{{ number_format(Session::get('cart')->totalPrice) }} VND</span>
                        </p>
                    </div>
                    <p><a href="{{ route('getCheckOut') }}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a>
                    </p>
                </div>
            @endif
        </div>
        </div>
    </section>

@endsection
