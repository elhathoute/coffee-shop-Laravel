<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Http\Requests\User\UpdateProfileRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public Function edit(){
        // get the current authen user
        return view('users.edit')->with('user',auth()->user());
    }
// update
public Function update(Request $request,User $user){

        $request->validate([
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('coffeShops.index')->with('success','Your Profile Has Been updated successfully.');
}
}
