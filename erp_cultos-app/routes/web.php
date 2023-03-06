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
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/addShepherd', [shepherdController::class, 'addShepherd'])->middleware(['auth'])->name('addShepherd');
});