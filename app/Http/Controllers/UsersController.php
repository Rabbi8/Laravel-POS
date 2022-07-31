<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users= User::all();
        return view('users.users', ['users'=>$users,]);
    }

    public function userDetails($id){
        return view('users.single_user_details', compact('id'));
    }

    public function userDelete($id){
        $user= User::find($id);
        $user->delete();
        return back();
    }
}
