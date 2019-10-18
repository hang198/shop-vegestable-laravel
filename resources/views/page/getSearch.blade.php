@extends('master')
@section('content')
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
                @foreach($products as $p)
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
        <div class="row">{{$products->links()}}</div>
        </div>
    </section>

@endsection
