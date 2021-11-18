<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    /**
     * Muestra pagina login
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $req)
    {
        return view('auth.login');
    }

    /**
     * Se hace login de usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->route('bank.dashboard.index');
        }

        return back()->withErrors([
            'email' => 'Las credenciales provistas no son correctas',
        ]);
    }

    /**
     * Hace Logout
     *
     * @return \Illuminate\Http\Response
     */

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('homepage');
    }
    /**
     * Muestra la pagina de registro
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $req)
    {
        return view('auth.register');
    }

        /**
     * Guarda usuario
     *
     * @return \Illuminate\Http\Response
     */

    public function saveUser(Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user);

        return redirect()->route('homepage');
    }

}
