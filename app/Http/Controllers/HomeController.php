<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        //Codigo para entrar directo a dashboard si se tiene una sesión abierta
        if (auth()->user() !== null) {
            return redirect()->route('doctor');
        }

        return view('home.index');
    }

    public function directorio() {


        return view('home.directorio');
    }


}
