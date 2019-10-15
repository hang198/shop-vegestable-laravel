@extends('master')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('products.update',$product->id) }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                <input type="text" name="description" value="{{$product->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Unit_price</label>
                <input type="number" name="unit_price"  value="{{$product->unit_price}}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Promotion_price</label>
                <input type="number" name="promotion_price"  value="{{$product->promotion_price}}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="text" name="image" value="{{$product->image}}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Unit</label>
                <input type="text" name="unit" value="{{$product->unit}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a  href="{{route('products.index')}}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection

