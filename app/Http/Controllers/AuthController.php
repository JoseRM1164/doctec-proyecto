<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Muestra la pagina de registro
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $req)
    {
        return view('auth.register');
    }
}
