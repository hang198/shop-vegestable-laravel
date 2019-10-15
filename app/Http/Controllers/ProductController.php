<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index() {
        if (!$this->userCan('view-page-admin')) {
            abort('403',__('Bạn không có quyền thực hiện thao tác này'));
        }
        $products = Product::all();
//        $productTypes = DB::table('productTypes')
//            ->join('products', 'productTypes.id', '=', 'products.productType_id')
//            ->select('productTypes.name')
//            ->get();
        $product_types = ProductType::all();
        return view('products.list',compact('products','product_types'));
    }
    public function create() {
        $product_type = ProductType::all();
        return view('products.create',compact('product_type'));
    }
    public function store(ProductRequest $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->productType_id = $request->productType_id;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->unit = $request->unit;
        $product->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('products.index');
    }
    public function edit($id) {
        $product = Product::findOrFail($id);
        $product_type = ProductType::all();
        return view('products.edit',compact('product','product_type'));
    }
    public function update(ProductRequest $request,$id) {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->productType_id = $request->productType_id;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->unit = $request->unit;
        $product->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('products.index');
    }
    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('products.index');
    }


}
