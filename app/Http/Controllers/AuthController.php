<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only(['username', 'password']);
        if(Auth::attempt($credentials, true)) {
            return redirect()->route('dashboard::index');
        } else {
            return back()->withErrors(['password' => 'Bad username or password']);
        }
    }
}
