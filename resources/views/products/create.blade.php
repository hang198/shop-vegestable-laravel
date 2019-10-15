@extends('master')
@section('content')
    <div class="container">
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if($errors->has('name'))
                <div class="alert alert-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product_type</label>
            <select name="productType_id" class="form-control">
                @foreach($product_type as $pt)
                    <option value="{{$pt->id}}">{{$pt->name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if($errors->has('description'))
                <div class="alert alert-danger">
                    {{$errors->first('description')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Unit_price</label>
            <input type="number" name="unit_price" class="form-control" id="exampleInputPassword1">
            @if($errors->has('unit_price'))
                <div class="alert alert-danger">
                    {{$errors->first('unit_price')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Promotion_price</label>
            <input type="number" name="promotion_price" class="form-control" id="exampleInputPassword1">
            @if($errors->has('promotion_price'))
                <div class="alert alert-danger">
                    {{$errors->first('promotion_price')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="text" name="image" class="form-control" id="exampleInputPassword1">
            @if($errors->has('image'))
                <div class="alert alert-danger">
                    {{$errors->first('image')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Unit</label>
            <input type="text" name="unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @if($errors->has('unit'))
            <div class="alert alert-danger">
                {{$errors->first('unit')}}
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
        <a  href="{{route('products.index')}}" class="btn btn-danger">Back</a>
    </form>
    </div>
    @endsection
