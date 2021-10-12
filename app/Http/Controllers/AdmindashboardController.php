<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmindashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admindashboard(){
        $data['title'] = 'Admin Dashboard';
        return view('admin.admin_dashboard', $data);
    }

    public function admin_logout(){
        Auth::logout();
        return redirect('/royalfood/admin');
    }
}
