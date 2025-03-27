<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        // kalo udh login, ga bs balik ke login
        if(Auth::check()){
            return redirect()->intended('/');
        }
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            // regenerate biar ga kena session fixation
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return redirect('/login')->with('error', 'Login failed! Incorrect Email or Password');
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
    
        return redirect('/');
        // return route('login');
    }

    public function change_password(Request $request, User $user)
    {
        $credentials = $request->validate([
            'password' => 'required',
            'password_new' => 'required',
        ]);

        $credentials['email'] = $user->email;

        if (Auth::attempt($credentials)) {
            $user->update([
                'password' => bcrypt($request->password_new)
            ]);

            return redirect('/uang-kas')->with('successPass', 'Password changed.');
        }

        return back()->with('error', 'Password change failed.');
    }
}
