@extends('master')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/slide/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Wishlist</span></p>
                    <h1 class="mb-0 bread">My Wishlist</h1>
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
                                <th>Product List</th>
                                <th>&nbsp;</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $p)
                            <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod"><div class="img" style="background-image:url('images/product/{{$p->image}}');"></div></td>

                                <td class="product-name">
                                    <h3>{{$p->name}}</h3>
                                    <p>{{$p->description}}</p>
                                </td>

                                <td class="price">@if($p->promotion_price==0)
                                        <span class="price-sale">{{ number_format($p->unit_price) }} VND</span>
                                    @else
                                        <span class="mr-2 price-dc">{{ number_format($p->unit_price) }} VND</span>
                                    @endif</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                    </div>
                                </td>

                                <td class="total"><span class="price-sale">{{ number_format($p->unit_price) }} VND</span>
                                </td>
                            </tr><!-- END TR-->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
