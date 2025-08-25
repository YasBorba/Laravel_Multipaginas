<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class CustomAuthController extends Controller
{
    public function home() {
        return view('auth.home'); // Tela 1
    }

    public function showRegister() {
        return view('auth.register'); // Tela 2
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home');
    }

    public function showLogin() {
        return view('auth.login'); // Tela 3
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard'); // Tela 4
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    public function dashboard() {
        return view('auth.dashboard'); // Tela 4
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    public function showReset() {
        return view('auth.reset'); // Tela 5
    }

    public function resetPassword(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('home')->with('status', 'Senha atualizada com sucesso.');
    }
}
