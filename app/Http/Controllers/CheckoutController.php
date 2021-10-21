<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkout(){
        $data['title'] = 'Checkout';
        $data['submenus'] = Category::all();
        $data['cartProducts'] = Cart::with(['product' => function($product){
            $product->with(['productDiscount'])->get();
        }])->where(['user_id'=>Auth::user()->id, 'status'=>0])->get();
        return view('layouts.pages.checkout', $data);
    }

    public function product_checkout(Request $request){
        $name = $request->f_name;
        echo $name; die();
    }
}
