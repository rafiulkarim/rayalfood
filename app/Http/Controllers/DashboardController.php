<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['title'] = 'Dashboard';
        $data['submenus'] = Category::all();
        // Top-rated food
        $trp = DB::select("SELECT count(star) as fivestar, product_id FROM reviews WHERE star=5 GROUP BY product_id ORDER BY
                                 COUNT(fivestar) DESC LIMIT 3");
        $review = array();
        foreach ($trp as $t){
            $b = Product::with('productDiscount')->where('id', $t->product_id)->first();
            array_push($review,$b);
        }
        $data['reviews'] = $review;
        // Special offer
        $query = Discount::orderBy('amount', 'desc')->limit(3)->get();
        $special_offer = array();
        foreach ($query as $item){
            $b = Product::with('productDiscount')->where('discount_id', $item->id)->first();
            array_push($special_offer,$b);
        }
        $data['special_offers'] = $special_offer;
        // Best-selling food
        $bsf = Cart::groupBy('product_id')->select('product_id', DB::raw('count(*) as total'))->limit(3)->get();
        $best_s_f = array();
        foreach ($bsf as $item){
            $c = Product::with('productDiscount')->where('id', $item->product_id)->first();
            array_push($best_s_f, $c);
        }
        $data['bsfs'] = $best_s_f;
        $data['products'] = Product::with('ProductCategory','productDiscount')
            ->where('status', 0)->get();
        return view('layouts.pages.dashboard', $data);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function dashboard_category(Request $request, $id){
        $data['title'] = 'Category';
        $data['submenus'] = Category::all();
        $data['products'] = Product::with('ProductCategory','productDiscount')->where(['category_id'=> $id, 'status' => 0])->get();
        return view('layouts.pages.singlecategory', $data);
    }

    public function dashboard_single_product($id){
        $data['title'] = 'Single Product';
        $data['submenus'] = Category::all();
        $data['products'] = Product::with('ProductCategory','productDiscount')->where(['id'=> $id])->get();
        return view('layouts.pages.product', $data);
    }



}
