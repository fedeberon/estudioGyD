<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use DB;
use Input;
use Storage;

class UsersController extends Controller
{

    public function index()
    {
        $user = User::all();
        return view('/users/index', compact('user', $user));
    }

   public function edit($id)
    {
        $user = User::find($id);
        return view('/users/edit', compact('user', $user));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'role_id' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->role_id = $request->get('role_id');

        $user->save();

        return $this->index();
    }
}
