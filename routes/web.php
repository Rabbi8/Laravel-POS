<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGroupsController;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/users', [UsersController::class, 'index']);
Route::get('/groups', [UserGroupsController::class, 'test']);


Route::get('users/details/{id}', [UsersController::class, 'userDetails'])->where('id', '[0-9]+');
Route::get('users/delete/{id}', [UsersController::class, 'userDelete'])->where('id', '[0-9]+');
