<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\shepherdController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//Inicio das rotas da parte de administrador
Route::get('/Index', [dashboardController::class, 'dash'])->middleware(['auth'])->name('dash');
Route::get('/addShepherd', [shepherdController::class, 'addShepherd'])->middleware(['auth'])->name('addShepherd');
Route::post('/storeShepherd', [shepherdController::class, 'storeShepherd'])->middleware(['auth'])->name('storeShepherd');