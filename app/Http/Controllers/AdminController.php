<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function main() {
        if (!Auth::user()) {
            return redirect()->route('loginPage');
        }
        return view('backend.dashboard.index');
    }

    public function login() {
        return view('backend.dashboard.login');
    }

    public function authenticate(Request $request, User $user)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->status === 1) {
                $request->session()->regenerate();
                return redirect()->route('dashboardPage')->with('message', "Siz tizimga muvaffaqqiyatli kirdingiz!");
            }
            return redirect()->route('loginPage')->with('error', "Ushbu foydalanuvchi faol emas!");
        }
        return redirect()->route('loginPage')->with('error', "Login/parol xato yoki tizim administratoridan bu holat bo'yicha aniqlik kiriting!");
    }


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function profile(User $user) {
        if (Auth::user()->status === 1) {
            return view('backend.dashboard.profile', [
                'user' => $user,
            ]);
        }
        return redirect()->route('loginPage');
    }

    public function lock(User $user) {
        return view('backend.dashboard.lock', [
            'user' => $user,
        ]);
    }

    public function unlock(Request $request)
    {
        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            session(['locked' => false]);
            return redirect()->route('dashboardPage'); // Admin dashboard'ga qaytarish
        }

        return back()->withErrors(['password' => 'Parol noto\'g\'ri']);
    }
}
