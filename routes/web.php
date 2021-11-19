<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/directorio', 'HomeController@directorio')->name('directorio');

Route::get('/registro', 'AuthController@register')->name('auth.register');
Route::post('/registro', 'AuthController@saveUser')->name('auth.save-user');

Route::get('/logout', 'AuthController@logout')->name('auth.logout');

Route::get('/login', 'AuthController@login')->name('auth.login');
Route::post('/login', 'AuthController@loginUser')->name('auth.login-user');


/*Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});*/

