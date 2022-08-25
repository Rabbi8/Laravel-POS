<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGroupsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Collection;
use App\Models\User;

Route::get('/users', [UsersController::class, 'index']);
Route::get('/groups', [UserGroupsController::class, 'test']);

Route::resource('users', UsersController::class)->where(['user'=> '[0-9]+',]);


// Route::get('users/details/{id}', [UsersController::class, 'userDetails'])->where('id', '[0-9]+');
// Route::get('users/delete/{id}', [UsersController::class, 'userDelete'])->where('id', '[0-9]+');

// Route::get('/', function(){
//     return view('welcome');
// });



