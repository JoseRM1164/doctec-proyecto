<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HorarioController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function() {

    Route::get('doctor', 'SesionController@doctor')->name('doctor.index');
    Route::get('paciente', 'SesionController@paciente')->name('paciente.index');

    Route::resource('horarios', 'HorarioController');

});
