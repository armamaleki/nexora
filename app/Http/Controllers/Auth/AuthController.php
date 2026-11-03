<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|string|min:6|max:50',
        ]);

        $remember = $request->boolean('remember');
        if (!Auth::attempt($credentials, $remember)) {
            throw ValidationException::withMessages([
                'email' => 'ایمیل یا رمز عبور وارد شده صحیح نیست.',
            ]);
        }
        $request->session()->regenerate();
        return redirect()->intended(route('dashboard.index'))
            ->with('success', 'با موفقیت وارد حساب کاربری خود شدید.');
    }
}
