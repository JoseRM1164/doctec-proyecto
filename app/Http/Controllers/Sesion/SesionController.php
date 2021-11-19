<?php

namespace App\Http\Controllers\Sesion;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesionController extends Controller

{
    public function doctor() {
        return view('sesiond.doctor');
    }

    public function paciente() {
        return view('sesionp.paciente');
    }
}
