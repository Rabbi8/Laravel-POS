<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGroupsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Collection;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserPaymentController;
use App\Http\Controllers\UserPurchasesController;
use App\Http\Controllers\UserReceiptController;
use App\Http\Controllers\UserSalesController;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('user-login', [LoginController::class, 'verify'])->name('login.confirm');
Route::get('logout',[LoginController::class, 'logout'] )->name('logout');




Route::group(['middleware' => 'admins_auth'], function(){

Route::get('/', [UsersController::class, 'index']);
Route::get('/dashboard', [UsersController::class, 'index']);


Route::resource('users', UsersController::class)->where(['user'=> '[0-9]+',]);


Route::get('users/{user}/sales', [UserSalesController::class, 'index'])->name('user.sales')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/sale/{sale}', [UserSalesController::class, 'show'])->name('user.sales.show')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/edit/{sale}', [UserSalesController::class, 'edit'])->name('user.sales.edit')->where(['user'=>'[0-9]+',]);
Route::delete('users/{sale}/destroy/{user}', [UserSalesController::class, 'destroy'])->name('user.sales.destroy')->where(['user'=>'[0-9]+',]);


Route::get('users/{user}/purchases', [UserPurchasesController::class, 'index'])->name('user.purchases')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/purchase/{purchase}', [UserPurchasesController::class, 'show'])->name('user.purchases.show')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/edit/{purchase}', [UserPurchasesController::class, 'edit'])->name('user.purchases.edit')->where(['user'=>'[0-9]+',]);
Route::delete('users/{purchase}/purchase/{user}', [UserPurchasesController::class, 'destroy'])->name('user.purchases.destroy')->where(['user'=>'[0-9]+',]);


Route::get('users/{user}/payments', [UserPaymentController::class, 'index'])->name('user.payments')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/payments/{payment}', [UserPaymentController::class, 'show'])->name('user.payments.show')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/payment_edit/{payment}', [UserPaymentController::class, 'edit'])->name('user.payments.edit')->where(['user'=>'[0-9]+',]);
Route::delete('users/{payment}/payment_destroy/{user}', [UserPaymentController::class, 'destroy'])->name('user.payments.destroy')->where(['user'=>'[0-9]+',]);


Route::get('users/{user}/receipts', [UserReceiptController::class, 'index'])->name('user.receipts')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/receipts/{receipt}', [UserReceiptController::class, 'show'])->name('user.receipts.show')->where(['user'=>'[0-9]+',]);
Route::get('users/{user}/receipt_edit/{receipt}', [UserReceiptController::class, 'edit'])->name('user.receipts.edit')->where(['user'=>'[0-9]+',]);
Route::delete('users/{receipt}/receipt_destroy/{user}', [UserReceiptController::class, 'destroy'])->name('user.receipts.destroy')->where(['user'=>'[0-9]+',]);




Route::resource('categories', CategoryController::class)->where(['category' => '[0-9]+']);
Route::resource('groups', GroupController::class)->where(['group' => '[0-9]+']);
Route::resource('products', ProductController::class)->where(['group' => '[0-9]+']);

});










