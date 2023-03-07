<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\shepherdController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashShepherd', [dashboardController::class, 'indexShepherd'])->middleware(['auth'])->name('dashShepherd');

//Inicio das rotas da parte de administrador
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    //Inicio das rotas para a parte de pastor

    Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
    Route::get('/addShepherd', [shepherdController::class, 'addShepherd'])->middleware(['auth'])->name('addShepherd');
    Route::post('/storeShepherd', [shepherdController::class, 'storeShepherd'])->middleware(['auth'])->name('storeShepherd');
});


require __DIR__.'/auth.php';