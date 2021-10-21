<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $data['products'] = Product::with('ProductCategory','productDiscount')->get();
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
