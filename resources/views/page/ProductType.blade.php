@extends('master')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/slide/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Products</span></p>
                    <h1 class="mb-0 bread">Products</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category">
                        @foreach($type_d as $t)
                            <li><a href="{{ route('product_type',$t->id) }}">{{ $t->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                @foreach($product_Type as $pd)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product_detail',$pd->id) }}" class="img-prod"><img class="img-fluid" src="images/product/{{$pd->image}}" alt="Colorlib Template">
                            @if($pd->promotion_price!=0)<span class="status">
                                Sale</span>
                            @endif
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{ route('product_detail',$pd->id) }}">{{$pd->name}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">
                                    @if($pd->promotion_price==0)
                                        <span class="price-sale">{{ number_format($pd->unit_price) }} VND</span>
                                    @else
                                        <span class="mr-2 price-dc">{{ number_format($pd->unit_price) }} VND</span>
                                        <span class="price-sale">{{ number_format($pd->promotion_price) }} VND</span></p>
                                        @endif
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{ route('product_detail',$pd->id) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{ route('addCart',$pd->id) }}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection
