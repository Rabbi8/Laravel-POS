<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Password;

class UsersController extends Controller
{

    public function index()
    {
       $this->data['users']= User::all();
        return view('users.users', $this->data );
    }


    public function  create()
    {
        
         $groups = Group::all();
         foreach($groups as $group){
           $this->data['user_group'][$group->id]= $group->title;
         }
         $this->data['mode'] = 'Create user';

        return view('users.create_edit', $this->data);
    }

    public function store(StoreUserRequest $request)
    {
        $stored_data = $request->all();
        $stored_data['password'] = password_hash($request->password, PASSWORD_BCRYPT);
        User::create($stored_data);
        $this->data['users']= User::all();
        return view('users.users', $this->data );
    }


    public function show($id)
    {
        $this->data['users']         = User::findOrFail($id);
        $this->data['mode']          = 'Information';
        return view('users.show', $this->data );
    }

    public function edit($id)
    {
        $this->data['user']         = User::find($id);
        $this->data['mode']         = 'Edit user';
        $groups= Group::all();
        foreach($groups as $group){
           $this->data['user_group'][$group->id]= $group->title;
         }
        return view('users.create_edit', $this->data );
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->all();
        $user= User::findOrFail($id);
        $user->name         = $data['name'];
        $user->email        = $data['email'];
        $user->phone        = $data['phone'];
        $user->address      = $data['address'];
        $user->save();
        return redirect()->to('dashboard');


    }

    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        return back();
    }
}
