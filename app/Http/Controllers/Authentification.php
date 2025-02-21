<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Authentification extends Controller
{
    public function RegisterForm(){
        return view('Auth.Register');
    }

    public function Register(Request $request){

        // dd($request['name']);

        // $request = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        //     'confirm-password' => 'required|same:Password',
        //     'photo' => 'required'
        // ]);
        // echo "here";

        // dd($request['email']);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'role_id' => 2,
            'photo' => $request['photo']
        ]);

        return redirect('/DashClient');
    }

    public function Login(Request $request)
    {
        // dd($request['email'], $request['password']);
    //     Validate the request data
        $credentials = $request->validate([
            'email' => 'required|string|max:50',
            'password' => 'required|string',
        ]);

        // Attempt to log in using the provided credentials and the Auth facade (class)
        if (Auth::attempt($credentials)) {
            // Regenerate the session to prevent session fixation
            $request->session()->regenerate();

            // Redirect to intended page or home
            return redirect('/SalleClient');
        }

        // Invalid credentials, output error message
        return back()->withErrors([
            'username' => 'Invalid credentials.',
        ])->withInput();
    }

    public function Logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
