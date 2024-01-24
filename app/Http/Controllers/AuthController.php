<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        if($request->isMethod('get')){
            return view('auth.register');
        }else{
            $request->validate([
                'name' => 'required|string|max:250',
                'email' => 'required|email|max:250|unique:users',
                'password' => 'required|min:8|confirmed',
                'phone' => 'required|numeric|min:10'
            ]);
    
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'email_verified_at' => now(),
            ]);
    
            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials, ($request->remember == 'on') ? true : false);
            $request->session()->regenerate();
            return redirect()->route('view.index')
            ->withSuccess('You have successfully registered & logged in!');
        }
    }

    public function login(Request $request)
    {
        if(($request->isMethod('get'))){
            return view('auth.login');
        }else{
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if(Auth::attempt($credentials, ($request->remember == 'on') ? true : false))
            {
                $request->session()->regenerate();
                return redirect()->route('view.index')
                    ->withSuccess('You have successfully logged in!');
            }

            return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');
        }

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');

    }
}
