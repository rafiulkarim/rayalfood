<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $data['products'] = Product::with('ProductCategory','productDiscount')->where('status','=',0)->get();
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
