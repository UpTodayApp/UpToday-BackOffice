<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class userController extends Controller
{
    public function Login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
            return redirect("listarPost");
        return redirect("/login")->with("failed", true);
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect("/login");
    }
}
