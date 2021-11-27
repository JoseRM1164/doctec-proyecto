<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {

        //Codigo para entrar directo a dashboard si se tiene una sesión abierta
        if (auth()->user() !== null) {
            return redirect()->route('sesion.doctor.index');
        }
        return view('home.index');
    }

    public function directorio() {

        $usuarios = User::all();
        return view('home.directorio')->with('usuarios', $usuarios);;
    }


}
