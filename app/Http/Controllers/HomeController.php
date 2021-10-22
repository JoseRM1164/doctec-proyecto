<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        \Log::info("Prueba");
        $account = \App\Models\Account::find(1);

        return view('home.index', ['account' => $account]);
    }
}
