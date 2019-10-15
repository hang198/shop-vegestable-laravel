@extends('master')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/slide/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Checkout</span></p>
                    <h1 class="mb-0 bread">Checkout</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <form action="{{ route('postCheckOut') }}" method="post" class="billing-form">
                @csrf
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
            <div class="row justify-content-center">

                <div class="col-xl-7 ftco-animate">
                        <h3 class="mb-4 billing-heading">Billing Details</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="">
                                    @if($errors->has('name'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('name')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label><br>
                                    <input id="gender" type="radio" class="input-radio" name="gender" value="Male"
                                           checked="checked" style="width: 10%"><span style="margin-right: 10%">Male</span>
                                    <input id="gender" type="radio" class="input-radio" name="gender" value="Female"
                                           style="width: 10%"><span>Female</span>                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="city" id="" class="form-control">
                                            <option value=""></option>
                                            <option value="Việt Nam">Việt Nam</option>
                                            <option value="Thái Lan">Thái Lan</option>
                                            <option value="Hàn Quốc">Hàn Quốc</option>
                                            <option value="Nhật Bản">Nhật Bản</option>
                                            <option value="Mỹ">Mỹ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">Address</label>
                                    <input type="text" value="{{ old('address') }}" name="address" class="form-control" placeholder="">
                                    @if($errors->has('address'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('address')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" value="{{old('phone')}}" name="phone" class="form-control" placeholder="">
                                    @if($errors->has('phone'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('phone')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="expample@gmail.com">
                                    @if($errors->has('email'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>@if(Session::has('cart')){{number_format(Session::get('cart')->totalPrice)." VND"}}
                                        @else {{'0'}}
                                        @endif</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Payment Method</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment" value="ATM" class="mr-2"> Direct Bank Tranfer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" value="COD" name="payment"class="mr-2"> Check Payment</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment" value="Payal" class="mr-2"> Paypal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit">Place an order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

            </div>
            </form><!-- END -->
        </div>
    </section> <!-- .section -->
    @endsection
