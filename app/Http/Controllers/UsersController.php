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

    /*public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'rol' => 'required',
        ]);
    }*/

    public function show(User $user)
    {
        return view('/users/show',compact('user', $user));
    }

/*   public function edit(User $user)
    {
        return view('/users/edit', compact('user', $user));

        $user = User::create(['Usuario' => $request->name,'Email' => $request->email, 'Rol' => $request->role_id]);
        return redirect('/users/show/'.$user->id);
    }*/

    /*public function update(Request $request, User $user)
    {
        $request->validate([
            'Usuario' => 'required',
            'Email' => 'required',
            'Rol' => 'required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();
        $request->session()->flash('message', 'Successfully modified the user!');
        return redirect('/users/show');
    }*/

   /* public function destroy(Request $request, User $user)
    {
        $user->delete();
        $request->session()->flash('message', 'Successfully deleted the user!');
        return redirect('/users/index');
    }*/
}
