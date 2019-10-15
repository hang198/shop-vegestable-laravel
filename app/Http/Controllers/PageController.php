<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Cart;
use App\Customer;
use App\Http\Requests\CheckOutRequest;
use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index() {
        $slide = Slide::all();
        $product = Product::all();
        $product_type = ProductType::all();
        return view('page.home',compact('slide','product','product_type'));
    }
    public function productType($type) {
        $product_Type = Product::where('productType_id',$type)->get();
        $type_d = ProductType::all();
        return view('page.ProductType',compact('product_Type','type_d'));
    }
    public function productDetail(Request $request,$id)
    {
        $product = Product::where('id', $request->id)->first();
        $product_related = Product::where('productType_id', $product->productType_id)->paginate(4);
        return view('page.ProductDetail', compact('product', 'product_related'));
    }
    public function addCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session('cart');
        $cart = new Cart($oldCart);
        $cart->add($product, $id, $request->quantity);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
    public function delCart($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function showCart() {
        $cart = Session('cart');
        return view('page.showCart',compact('cart'));
    }
    public function getCheckOut() {
        if (!$this->userCan('view-page-guest')) {
            abort('403',__('Bạn phải đăng nhập trước khi thực hiện thao tác này'));
        }
        $cart = Session::get('cart');
        return view('page.checkout', compact('cart'));
    }
    public function postCheckOut(CheckOutRequest $request)
    {

        if (Session::has('cart')) {
            $cart = Session::get('cart');

            $customer = new Customer();
            $customer->name = $request->name;
            $customer->gender = $request->gender;
            $customer->email = $request->email;
            $customer->address = $request->address;
            $customer->phone = $request->phone;
            $customer->city = $request->city;
            $customer->save();

            $bill = new  Bill();
            $bill->customer_id = $customer->id;
            $bill->date_order = date('Y-m-d');
            $bill->total = $cart->totalPrice;
            $bill->payment = $request->payment;
            $bill->save();

            foreach ($cart->items as $key => $value) {
                $bill_detail = new BillDetail();
                $bill_detail->bill_id = $bill->id;
                $bill_detail->product_id = $key;
                $bill_detail->quantity = $value['qty'];
                $bill_detail->unit_price = ($value['price'] / $value['qty']);
                $bill_detail->save();
            }
            Session::forget('cart');
        }

        return redirect()->back()->with('success', 'Đã đặt hàng thành công');
    }
    public function about() {
        return view('page.about');
    }
    public function blog() {
        return view('page.blog');
    }
    public function contact() {
        return view('page.contact');
    }
    public function getSearch(Request $request) {
        $product = Product::where('name','like','%'.$request->key.'%')->orWhere('unit_price',$request->key)->get();
        return view('page.search',compact('product'));
    }
}
