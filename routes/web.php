<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGroupsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Collection;
use App\Models\User;
use Illuminate\Support\Carbon;

Route::get('/', [UsersController::class, 'index']);
Route::get('/dashboard', [UsersController::class, 'index']);

Route::resource('users', UsersController::class)->where(['user'=> '[0-9]+',]);
Route::resource('categories', CategoryController::class)->where(['category' => '[0-9]+']);



