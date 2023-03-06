<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('auth.login');
});

//Inicio das rotas da parte de administrador
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
});