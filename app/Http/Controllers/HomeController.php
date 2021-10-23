<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home(){
        if(Auth::check() && Auth::user()->userRole == 2){
            return redirect('/dashboard');
        }
        $data['title'] = 'Home';
        $data['submenus'] = Category::all();
        // Special offer
        $query = Discount::orderBy('amount', 'desc')->limit(3)->get();
        $special_offer = array();
        foreach ($query as $item){
            $b = Product::with('productDiscount')->where('discount_id', $item->id)->first();
            array_push($special_offer,$b);
        }
        $data['special_offers'] = $special_offer;
        //print_r($special_offer); die();
        // Best-selling food
        $bsf = Cart::groupBy('product_id')->select('product_id', DB::raw('count(*) as total'))->limit(3)->get();
        $best_s_f = array();
        foreach ($bsf as $item){
            $c = Product::with('productDiscount')->where('id', $item->product_id)->first();
            array_push($best_s_f, $c);
        }
        $data['bsfs'] = $best_s_f;
        $data['products'] = Product::with('ProductCategory','productDiscount')->where('status','=',0)->limit(6)->get();
        return view('layouts.pages.index', $data);
    }

    public function product_category(Request $request, $id){
        $data['title'] = 'Category';
        $data['submenus'] = Category::all();
        $data['products'] = Product::with('ProductCategory','productDiscount')->where(['category_id'=> $id, 'status' => 0])->get();
        return view('layouts.pages.category', $data);
    }

    public function single_product($id){
        $data['title'] = 'Single Product';
        $data['submenus'] = Category::all();
        $data['products'] = Product::with('ProductCategory','productDiscount')->where(['id'=> $id])->get();
        return view('layouts.pages.singleproduct', $data);
    }

}
