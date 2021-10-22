<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $account = \App\Models\Account::find(1);

        return view('home.index', ['account' => $account]);
    }
}
