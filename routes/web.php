<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDiscountController;
use App\Http\Controllers\AdminProductController;

/* Cutomer Controller */

Route::get('/', [HomeController::class, 'home'])->name('home');

// account
Route::get('/account', [RegistrationController::class, 'account'])->name('account');
Route::post('/register', [RegistrationController::class, 'registration'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// authentication return
Route::get('/login', [RegistrationController::class, 'account'])->name('account');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');


/* Admin Controller */

// Admin Dashboard
Route::get('/royalfood/admin', [AdminHomeController::class, 'adminhome'])->name('adminhome');
Route::post('/admin/login', [AdminHomeController::class, 'admin_login'])->name('admin_login');
Route::get('/admin/dashboard', [AdmindashboardController::class, 'admindashboard'])->name('admindashboard');
Route::get('/login', [AdminHomeController::class, 'adminhome'])->name('adminhome');
Route::get('/admin/logout', [AdmindashboardController::class, 'admin_logout'])->name('admin_logout');

// Category
Route::get('/admin/category/list', [AdminCategoryController::class, 'category'])->name('category');
Route::get('/admin/add/category', [AdminCategoryController::class, 'add_category'])->name('add_category');
Route::get('/admin/edit/category/{id}', [AdminCategoryController::class, 'edit_category'])->name('edit_category');
Route::post('/admin/edit/category/process/{id}', [AdminCategoryController::class, 'edit_process'])->name('edit_process');
Route::post('/admin/category/process', [AdminCategoryController::class, 'category_process'])->name('category_process');
Route::post('/admin/category/inactive', [AdminCategoryController::class, 'category_active'])->name('category_active');
Route::post('/admin/category/active', [AdminCategoryController::class, 'category_inactive'])->name('category_inactive');
Route::get('/admin/category/delete/{id}', [AdminCategoryController::class, 'category_delete'])->name('category_delete');


// discount
Route::get('/admin/discount/list', [AdminDiscountController::class, 'discount'])->name('discount');
Route::get('/admin/add/discount', [AdminDiscountController::class, 'add_discount'])->name('add_discount');
Route::post('/admin/discount/process', [AdminDiscountController::class, 'discount_process'])->name('discount_process');
Route::get('/admin/edit/discount/{id}', [AdminDiscountController::class, 'edit_discount'])->name('edit_discount');
Route::post('/admin/edit/discount/process/{id}', [AdminDiscountController::class, 'discount_edit_process'])->name('discount_edit_process');
Route::get('/admin/discount/delete/{id}', [AdminDiscountController::class, 'discount_delete'])->name('discount_delete');


//Product
Route::get('/admin/product/list', [AdminProductController::class, 'product'])->name('product');
Route::get('/admin/add/product/', [AdminProductController::class, 'add_product'])->name('add_product');
Route::post('/admin/add/product/process', [AdminProductController::class, 'product_process'])->name('product_process');

