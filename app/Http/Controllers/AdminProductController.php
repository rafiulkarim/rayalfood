<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function product(){
        $data['title'] = 'product List';
        $data['products']  = Product::with('ProductCategory','productDiscount')->get();
        return view('admin.product_list', $data);
    }

    public function add_product(){
        $data['title'] = 'Add Product';
        $data['discount'] = DB::table('discounts')->get();
        $data['category'] = DB::table('categories')->get();
        return view('admin.add_product', $data);
    }

    public function product_process(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $imageName = $request->file('image');
        $new_name = $imageName->getClientOriginalName();
        $request->image->move(public_path('/admin/product'), $new_name);
        $product->image = $new_name;
        $product->category_id = $request->category;
        $product->discount_id = $request->discount_option;

        $query = $product->save();

        if($query){
            return redirect('/admin/add/product')->with('success', 'product added Successfully');
        }else{
            return redirect('/admin/add/product')->with('danger', 'Something went Wrong');
        }

    }
}
