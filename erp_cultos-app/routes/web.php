<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\shepherdController;
use App\Http\Controllers\treasurerController;
use App\Http\Controllers\worship_leaderController;
use App\Http\Controllers\branchesController;
use App\Http\Controllers\cultController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\patrimonyController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\announcementController;

//Rota inicial de acesso a tela de login
Route::get('/', function () {
    return view('auth.login');
});

//Inicio das rotas de redirecionamento
Route::get('/dashShepherd', [dashboardController::class, 'indexShepherd'])->middleware(['auth'])->name('dashShepherd');
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//Inicio das rotas da parte de administrador
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    
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
    
    //Inicio da parte de Patrimonio 
    Route::get('/addPatrimony', [patrimonyController::class, 'addPatrimony'])->middleware(['auth'])->name('addPatrimony');
    Route::post('/storePatrimony', [patrimonyController::class, 'storePatrimony'])->middleware(['auth'])->name('storePatrimony');
    Route::get('/allPatrimony', [patrimonyController::class, 'allPatrimony'])->middleware(['auth'])->name('allPatrimony');
    Route::post('/updatePatrimony/{id}', [patrimonyController::class, 'updatePatrimony'])->middleware(['auth'])->name('updatePatrimony');
    Route::get('/deletePatrimony/{id}', [patrimonyController::class, 'deletePatrimony'])->middleware(['auth'])->name('deletePatrimony');
    
    //Inicio das rotas que serao usadas por dois usuarios em simultanes
    Route::get('/addShepherd', [shepherdController::class, 'addShepherd'])->middleware(['auth'])->name('addShepherd');
    Route::post('/storeShepherd', [shepherdController::class, 'storeShepherd'])->middleware(['auth'])->name('storeShepherd');
    Route::get('/allShepherd', [shepherdController::class, 'allShepherd'])->middleware(['auth'])->name('allShepherd');
    Route::post('/updateShepherd/{id}', [shepherdController::class, 'updateShepherd'])->middleware(['auth'])->name('updateShepherd');
    Route::get('/deleteShepherd/{id}', [shepherdController::class, 'deleteShepherd'])->middleware(['auth'])->name('deleteShepherd');

    //Inicio das rotas da parte de departmentos
    Route::get('/addDepartment', [departmentController::class, 'addDepartment'])->middleware(['auth'])->name('addDepartment');
    Route::post('/storeDepartment', [departmentController::class, 'storeDepartment'])->middleware(['auth'])->name('storeDepartment');
    Route::get('/allDepartment', [departmentController::class, 'allDepartment'])->middleware(['auth'])->name('allDepartment');
    Route::post('/updateDepartment/{id}', [departmentController::class, 'updateDepartment'])->middleware(['auth'])->name('updateDepartment');
    Route::get('/deleteDepartment/{id}', [departmentController::class, 'deleteDepartment'])->middleware(['auth'])->name('deleteDepartment');

});

//Inicio da parte de actividade
Route::get('/addActivity', [activityController::class, 'addActivity'])->middleware(['auth'])->name('addActivity');
Route::post('/storeActivity', [activityController::class, 'storeActivity'])->middleware(['auth'])->name('storeActivity');
Route::get('/allActivity', [activityController::class, 'allActivity'])->middleware(['auth'])->name('allActivity');
Route::post('/updateActivity/{id}', [activityController::class, 'updateActivity'])->middleware(['auth'])->name('updateActivity');
Route::get('/deleteActivity/{id}', [activityController::class, 'deleteActivity'])->middleware(['auth'])->name('deleteActivity');

//Inicio das rotas da parte de pastor
Route::group(['prefix' => 'worship_leader', 'middleware' => ['role:worship_leader']], function () {

    //Inicio das rotas para os comunicados    
    Route::post('/storeAnnouncement', [announcementController::class, 'storeAnnouncement'])->middleware(['auth'])->name('storeAnnouncement');
    Route::get('/addAnnouncement', [announcementController::class, 'addAnnouncement'])->middleware(['auth'])->name('addAnnouncement');
    Route::get('/allAnnouncement', [announcementController::class, 'allAnnouncement'])->middleware(['auth'])->name('allAnnouncement');
    Route::post('/updateAnnouncement/{id}', [announcementController::class, 'updateAnnouncement'])->middleware(['auth'])->name('updateAnnouncement');
    Route::get('/deleteAnnouncement/{id}', [announcementController::class, 'deleteAnnouncement'])->middleware(['auth'])->name('deleteAnnouncement');

});

//Inicio das rotas da parte do lider de louvor
Route::group(['prefix' => 'worship_leader', 'middleware' => ['role:worship_leader']], function () {

    //Inicio das rotas para gerir os ficheiros File
    Route::post('/storeFile', [fileController::class, 'storeFile'])->middleware(['auth'])->name('storeFile');
    Route::get('/addFile', [fileController::class, 'addFile'])->middleware(['auth'])->name('addFile');
    Route::get('/allFile', [fileController::class, 'allFile'])->middleware(['auth'])->name('allFile');
    Route::post('/updateFile/{id}', [fileController::class, 'updateFile'])->middleware(['auth'])->name('updateFile');
    Route::get('/deleteFile/{id}', [fileController::class, 'deleteFile'])->middleware(['auth'])->name('deleteFile');

});


require __DIR__.'/auth.php';