<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\shepherdController;
use App\Http\Controllers\treasurerController;
use App\Http\Controllers\worship_leaderController;
use App\Http\Controllers\branchesController;
use App\Http\Controllers\cultController;
use App\Http\Controllers\activityController;

//Rota inicial de acesso a tela de login
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
    
    //Inicio das rotas da parte de filiais
    Route::get('/addBranches', [branchesController::class, 'addBranches'])->middleware(['auth'])->name('addBranches');
    Route::post('/storeBranches', [branchesController::class, 'storeBranches'])->middleware(['auth'])->name('storeBranches');
    Route::get('/allBranches', [branchesController::class, 'allBranches'])->middleware(['auth'])->name('allBranches');
    Route::post('/updateBranches/{id}', [branchesController::class, 'updateBranches'])->middleware(['auth'])->name('updateBranches');
    Route::get('/deleteBranches/{id}', [branchesController::class, 'deleteBranches'])->middleware(['auth'])->name('deleteBranches');
    
    //Inicio da parte de culto
    Route::get('/addCult', [cultController::class, 'addCult'])->middleware(['auth'])->name('addCult');
    Route::post('/storeCult', [cultController::class, 'storeCult'])->middleware(['auth'])->name('storeCult');
    Route::get('/allCult', [cultController::class, 'allCult'])->middleware(['auth'])->name('allCult');
    Route::post('/updateCult/{id}', [cultController::class, 'updateCult'])->middleware(['auth'])->name('updateCult');
    Route::get('/deleteCult/{id}', [cultController::class, 'deleteCult'])->middleware(['auth'])->name('deleteCult');
    
    //Inicios da parte de actividade
    Route::get('/addActivity', [activityController::class, 'addCult'])->middleware(['auth'])->name('addCult');
    Route::post('/storeActivity', [activityController::class, 'storeCult'])->middleware(['auth'])->name('storeCult');
    Route::get('/allActivity', [activityController::class, 'allCult'])->middleware(['auth'])->name('allCult');
    Route::post('/updateCult/{id}', [activityController::class, 'updateCult'])->middleware(['auth'])->name('updateCult');
    Route::get('/deleteCult/{id}', [activityController::class, 'deleteCult'])->middleware(['auth'])->name('deleteCult');
    
});

require __DIR__.'/auth.php';