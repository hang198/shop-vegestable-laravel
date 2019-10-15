@extends('master')
@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm</a>
        <form role="search" method="get" class="form-inline my-2 my-lg-0" id="searchform"
              action="{{ route('getSearch') }}">
            <input class="form-control mr-sm-2" name="key" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Desciption</th>
                <th scope="col">Unit_price</th>
                <th scope="col">Promotion_price</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            @if(count($products) === 0)
                <tr>
                    <td colspan="7">Không có dữ liệu</td>
                </tr>
            @endif
            @foreach($products as $key=>$product)
                <tbody>
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{asset('images/product/'.$product->image)}}" height="80px" width="80px"></td>
                    <td>{{ $product->description }}</td>
                    <td>{{ number_format($product->unit_price) }} VND</td>
                    <td>{{ number_format($product->promotion_price) }} VND</td>
                    <td><a href="{{ route('products.edit',$product->id) }}" class="btn btn-success">Sửa</a></td>
                    <td><a href="{{ route('products.destroy',$product->id) }}"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-danger">Xóa</a></td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
