<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(User $user)
    {
        $users = $user::all();
        return view("users/index", compact("users"));
    }

    public function edit(User $user)
    {
        return view("users/edit", compact("user"));
    }

    public function update(User $user , Request $request)
    {
        $user->update($request->all());

        return redirect()->route("users");
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route("users");
    }

}
