<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\shepherdController;
use App\Http\Controllers\treasurerController;
use App\Http\Controllers\worship_leaderController;

Route::get('/', function () {
    return view('auth.login');
});

//Inicio das rotas de redirecionamento
Route::get('/dashShepherd', [dashboardController::class, 'indexShepherd'])->middleware(['auth'])->name('dashShepherd');
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//Inicio das rotas da parte de administrador
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    
    //Inicio das rotas para a parte de pastor
    Route::get('/addShepherd', [shepherdController::class, 'addShepherd'])->middleware(['auth'])->name('addShepherd');
    Route::post('/storeShepherd', [shepherdController::class, 'storeShepherd'])->middleware(['auth'])->name('storeShepherd');
    Route::get('/allShepherd', [shepherdController::class, 'allShepherd'])->middleware(['auth'])->name('allShepherd');
    Route::post('/updateShepherd/{id}', [shepherdController::class, 'updateShepherd'])->middleware(['auth'])->name('updateShepherd');
    Route::get('/deleteShepherd/{id}', [shepherdController::class, 'deleteShepherd'])->middleware(['auth'])->name('deleteShepherd');

    //Inicio das rotas da parte de tesoureiros
    Route::get('/addTreasurer', [treasurerController::class, 'addTreasurer'])->middleware(['auth'])->name('addTreasurer');
    Route::post('/storeTreasurer', [treasurerController::class, 'storeTreasurer'])->middleware(['auth'])->name('storeTreasurer');
    Route::get('/allTreasurer', [treasurerController::class, 'allTreasurer'])->middleware(['auth'])->name('allTreasurer');
    Route::post('/updateTreasurer/{id}', [treasurerController::class, 'updateTreasurer'])->middleware(['auth'])->name('updateTreasurer');
    Route::get('/deleteTreasurer/{id}', [treasurerController::class, 'deleteTreasurer'])->middleware(['auth'])->name('deleteTreasurer');

    //Inicio da parte contendo as rotas de lider de louvor
    Route::get('/addWorship_leader', [worship_leaderController::class, 'addWorship_leader'])->middleware(['auth'])->name('addWorship_leader');
    Route::post('/storeWorship_leader', [worship_leaderController::class, 'storeWorship_leader'])->middleware(['auth'])->name('storeWorship_leader');
    Route::get('/allWorship_leader', [worship_leaderController::class, 'allWorship_leader'])->middleware(['auth'])->name('allWorship_leader');
    Route::post('/updateWorship_leader/{id}', [worship_leaderControllerController::class, 'updateWorship_leader'])->middleware(['auth'])->name('updateWorship_leader');
    Route::get('/deleteWorship_leader/{id}', [worship_leaderControllerController::class, 'deleteWorship_leader'])->middleware(['auth'])->name('deleteWorship_leader');
    

});


require __DIR__.'/auth.php';