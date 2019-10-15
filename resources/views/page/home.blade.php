@extends('master')
@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        @foreach($slide as $sl)
        <div class="slider-item">
            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                 data-bgposition="center center" data-bgrepeat="no-repeat"
                 data-lazydone="undefined"
                 src="{{asset("images/slide/$sl->image")}}"
                 data-src="{{asset("images/slide/$sl->image")}}"
                 style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('images/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
            </div>
        </div>
            @endforeach
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">@lang('lang.freeship')</h3>
                        <span>@lang('lang.on') 70,000VND</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Always Fresh</h3>
                        <span>Product well package</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Superior Quality</h3>
                        <span>Quality Products</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support</h3>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach($product_type as $pt)
                        <div class="col-md-3">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('images/category/{{$pt->image}}');">
                                <div class="text px-2 py-1">
                                    <h2 class="mb-0"><a href="{{ route('product_type',$pt->id) }}">{{$pt->name}}</a></h2>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Featured Products</span>
                <h2 class="mb-4">Our Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($product as $p)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <div class="single-item">
                    <a href="{{route('product_detail',$p->id)}}" class="img-prod"><img class="img-fluid" src="images/product/{{$p->image}}" alt="Colorlib Template" height="150px">
                        @if($p->promotion_price!=0)<span class="status">
                                Sale
                            @endif
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{ route('product_detail',$p->id) }}">{{$p->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    @if($p->promotion_price==0)
                                    <span class="price-sale">{{ number_format($p->unit_price) }} VND</span>
                                     @else
                                        <span class="mr-2 price-dc">{{ number_format($p->unit_price) }} VND</span>
                                        <span class="price-sale">{{ number_format($p->promotion_price) }} VND</span></p>
                                @endif
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{ route('product_detail',$p->id) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="{{ route('addCart',$p->id) }}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>

    </div>
</section>

<section class="ftco-section img" style="background-image: url(images/slide/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">Best Price For You</span>
                <h2 class="mb-4">Deal of the day</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                <h3><a href="#">Spinach</a></h3>
                <span class="price">12,000 VND <a href="#">now 8,000 VND only</a></span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>


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
