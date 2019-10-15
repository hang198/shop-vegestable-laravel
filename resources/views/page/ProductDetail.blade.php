@extends('master')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/slide/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span class="mr-2"><a href="{{route('product_type',1)}}">Product</a></span> <span>Product Single</span></p>
                    <h1 class="mb-0 bread">Product Single</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/product/{{$product->image}}" class="image-popup"><img src="images/product/{{$product->image}}" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{$product->name}}</h3>
                    <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                    <div class="d-flex">
                        <div class="pricing">
                        <p class="price">
                        @if($product->promotion_price==0)
                            <span class="price-sale">{{ number_format($product->unit_price) }} VND</span>
                        @else
                            <span class="price-sale">{{ number_format($product->promotion_price) }} VND</span></p>
                        @endif
                        </div>
                    </div>
                    <p>{{$product->description}}</p>
                    <form method="get" action="{{route('addCart',$product->id)}}">
                        @csrf
                    <div class="row mt-4">
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <p style="color: #000;">600 kg available</p>
                        </div>
                    </div>
                        <div>
                            <button type="submit" class="btn btn-success py-md-2">Add to Cart</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Products</span>
                    <h2 class="mb-4">Related Products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($product_related as $pr)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product_detail',$pr->id) }}" class="img-prod"><img class="img-fluid" src="images/product/{{$pr->image}}" alt="Colorlib Template">
                            @if($pr->promotion_price!=0)<span class="status">
                                Sale</span>
                            @endif
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{ route('product_detail',$pr->id) }}">{{$pr->name}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">
                                        @if($pr->promotion_price==0)
                                            <span class="price-sale">{{ number_format($pr->unit_price) }} VND</span>
                                        @else
                                            <span class="mr-2 price-dc">{{ number_format($pr->unit_price) }} VND</span>
                                            <span class="price-sale">{{ number_format($pr->promotion_price) }} VND</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{ route('product_detail',$pr->id) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{ route('addCart',$pr->id) }}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <div class="row">{{ $product_related->links() }}</div>
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
