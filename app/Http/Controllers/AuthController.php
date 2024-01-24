<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function indec(Request $request){
        if($request->isMethod('get')){
            return view('properties.dashboard');
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
}
