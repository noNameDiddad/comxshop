<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->inputEmail)->first();
        $result = $user->auth($request->inputPassword);
        
        if(!$result)
        {
            return redirect()->back();
        }
        if($user->role == 0)
        {
            return redirect('/admin');
        }
        else{
            return redirect('/');
        }
    }
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->inputName,
            'role' => 1,
            'email' => $request->inputEmail,
            'password' => Hash::make($request->inputPassword),
        ]);

        $user->auth($request->inputPassword);

        return redirect('/');
    }
}
