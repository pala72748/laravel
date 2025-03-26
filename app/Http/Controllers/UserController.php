<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Redot\Toastify\Facades\Toastify;

class UserController
{
    // ✅ User Registration
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $email = User::where('email', $request->email)->first();
        $username = User::where('username', $request->username)->first();

        if($username){
            toastify()->error('Username already exists!')->push();
            return redirect()->back();
        }

        if($email){
            toastify()->error('Email already exists!')->push();
            return redirect()->back();
        }

        // Create user
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // ✅ Hashing password
        ]);

        

        toastify()->success('Registration successful!');
        return redirect()->route('login');
    }

    // ✅ User Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Authenticate user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            toastify()->success('Login successful!'); // ✅ Success message

            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->isUser()) {
                return redirect()->route('user.dashboard');
            }
        }

        toastify()->error('Login Failed!');
        return redirect()->back();
        
    }

    // ✅ Logout User
    public function logout()
    {
        Auth::logout();
        toastify()->success('Logout successful!');
        return redirect()->route('login');
    }

    // ✅ Check Login Status
    public function checklogin()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->isUser()) {
                return redirect()->route('user.dashboard');
            }
        }
        return redirect()->route('login');
    }

    public function getlogin()
    {
        if (Auth::check()) {
            return redirect()->route('checklogin');
        }
        return view('auth.login');
    }
}
