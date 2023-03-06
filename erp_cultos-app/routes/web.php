<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('auth.login');
});

//Inicio da rota que e responsavel por redirecionar os usuarios
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
