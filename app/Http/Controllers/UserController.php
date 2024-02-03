<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function index(User $user , Request $request)
    {

        $searchTerm = $request->input("search");
        if($searchTerm){
            $users = $user::WHERE("name", "LIKE", "%$searchTerm%")
                ->orWhere("email", "LIKE", "%$searchTerm%")
                ->paginate(2);
        }else{
            $users = $user::paginate(2);
        }

        return view("users/index", compact("users"));
    }

    public function edit(User $utilisateur)
    {
        return view('users.edit', compact('utilisateur'));
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
