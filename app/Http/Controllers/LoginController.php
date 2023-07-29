<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{


    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('login.index');
        }
    }


    protected function validateLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    public function processLogin(Request $request)
    {
        $this->validateLogin($request);

        $credentials = $request->only('username', 'password');


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Login berhasil
            return redirect()->intended('dashboard');
        }
        // Login gagal
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
