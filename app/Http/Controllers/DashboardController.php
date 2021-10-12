<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['title'] = 'Dashboard';
        return view('layouts.pages.dashboard', $data);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    
}
