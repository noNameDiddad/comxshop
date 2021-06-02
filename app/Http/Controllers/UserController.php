<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register', ['message' => '']);
    }

    public function register(Request $request)
    {
        if ($request->inputPassword == $request->inputRepeatPassword) {
            $user = User::create([
                'name' => $request->inputName,
                'role' => 1,
                'email' => $request->inputEmail,
                'password' => Hash::make($request->inputPassword),
            ]);

            $user->auth($request->inputPassword);

            return redirect('/login')->with(['message' => 'Регистрация прошла успешно, авторизуйтесь.']);
        } else {
            return view('auth.register', ['message' => 'Пароли не совпадают']);
        }

    }

    public function show()
    {
        return view('auth.login', ['message'=>'']);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->inputEmail)->first();
        $result = $user->auth($request->inputPassword);

        if (!$result) {
            return redirect()->back();
        }
        if ($user->role == 0) {
            return redirect()->route('admin.index');
        } else {
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('outputMain');
    }


}
