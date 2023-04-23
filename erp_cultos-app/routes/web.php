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
use App\Http\Controllers\reportActivitiesController;
use App\Http\Controllers\inputController;
use App\Http\Controllers\outputController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\memberAnnouncementController;
use App\Http\Controllers\prayerController;
use App\Http\Controllers\anotherController;

//Rota inicial de acesso a tela de login
Route::get('/', function () {
    return view('auth.login');
});

//Inicio das rotas de redirecionamento
Route::get('/dashShepherd', [dashboardController::class, 'indexShepherd'])->middleware(['auth'])->name('dashShepherd');
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//Inicio das rotas da parte de administrador
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {

    //Inicio das rotas para bloqueio de membros
    Route::get('/updateStatus/{id}/{status}', [memberController::class, 'updateStatus'])->middleware(['auth'])->name('updateStatus');
    
    //Inicio da rota de todos os membros
    Route::get('/allMember', [memberController::class, 'allMember'])->middleware(['auth'])->name('allMember');

    //Inicio da rota para poder ter acesso ao comunicado
    Route::get('/showAnnouncements/{id}', [dashboardController::class, 'showAnnouncement'])->middleware(['auth'])->name('showAnnouncements');

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
    Route::post('/updateWorship_leader/{id}', [worship_leaderController::class, 'updateWorship_leader'])->middleware(['auth'])->name('updateWorship_leader');
    Route::get('/deleteWorship_leader/{id}', [worship_leaderController::class, 'deleteWorship_leader'])->middleware(['auth'])->name('deleteWorship_leader');
    
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
    Route::get('/showDepartment/{id}', [departmentController::class, 'showDepartment'])->middleware(['auth'])->name('showDepartment');
    Route::post('/connectDepartment', [departmentController::class, 'connectDepartment'])->middleware(['auth'])->name('connectDepartment');
    Route::get('/deleteDepartmentMember/{id}', [departmentController::class, 'deleteDepartmentMember'])->middleware(['auth'])->name('deleteDepartmentMember');
});

//Inicio da parte de actividade
Route::get('/addActivity', [activityController::class, 'addActivity'])->middleware(['auth'])->name('addActivity');
Route::post('/storeActivity', [activityController::class, 'storeActivity'])->middleware(['auth'])->name('storeActivity');
Route::get('/allActivity', [activityController::class, 'allActivity'])->middleware(['auth'])->name('allActivity');
Route::post('/updateActivity/{id}', [activityController::class, 'updateActivity'])->middleware(['auth'])->name('updateActivity');
Route::get('/deleteActivity/{id}', [activityController::class, 'deleteActivity'])->middleware(['auth'])->name('deleteActivity');

//Inicio das rotas da parte de pastor
Route::group(['prefix' => 'shepherd', 'middleware' => ['role:shepherd']], function () {

    //Inicio da rota que retorna todos os pedidos de oracao
    Route::get('/allRequest', [prayerController::class, 'allRequest'])->middleware(['auth'])->name('allRequest');

    //Inicio das rotas para os comunicados    
    Route::post('/storeAnnouncement', [announcementController::class, 'storeAnnouncement'])->middleware(['auth'])->name('storeAnnouncement');
    Route::get('/addAnnouncement', [announcementController::class, 'addAnnouncement'])->middleware(['auth'])->name('addAnnouncement');
    Route::get('/allAnnouncement', [announcementController::class, 'allAnnouncement'])->middleware(['auth'])->name('allAnnouncement');
    Route::post('/updateAnnouncement/{id}', [announcementController::class, 'updateAnnouncement'])->middleware(['auth'])->name('updateAnnouncement');
    Route::get('/showAnnouncement/{id}', [announcementController::class, 'showAnnouncement'])->middleware(['auth'])->name('showAnnouncement');
    Route::get('/deleteAnnouncement/{id}', [announcementController::class, 'deleteAnnouncement'])->middleware(['auth'])->name('deleteAnnouncement');
  
    //Inicio das rotas da parte de adicionar relatorio de actividades 
    Route::get('/addReportActivities', [reportActivitiesController::class, 'addReportActivities'])->middleware(['auth'])->name('addReportActivities');
    Route::post('/storeReportActivities', [reportActivitiesController::class, 'storeReportActivities'])->middleware(['auth'])->name('storeReportActivities');
    Route::get('/allReportActivities', [reportActivitiesController::class, 'allReportActivities'])->middleware(['auth'])->name('allReportActivities');
    Route::post('/updateReportActivities/{id}', [reportActivitiesController::class, 'updateReportActivities'])->middleware(['auth'])->name('updateReportActivities');
    Route::get('/deleteReportActivities/{id}', [reportActivitiesController::class, 'deleteReportActivities'])->middleware(['auth'])->name('deleteReportActivities');
});

//Inicio das rotas da parte do lider de louvor
Route::group(['prefix' => 'worship_leader', 'middleware' => ['role:worship_leader']], function () {

    //Inicio das rotas para gerir os ficheiros File
    Route::post('/storeFile', [fileController::class, 'storeFile'])->middleware(['auth'])->name('storeFile');
    Route::get('/addFile', [fileController::class, 'addFile'])->middleware(['auth'])->name('addFile');
    Route::get('/allFile', [fileController::class, 'allFile'])->middleware(['auth'])->name('allFile');
    Route::post('/updateFile/{id}', [fileController::class, 'updateFile'])->middleware(['auth'])->name('updateFile');
    Route::get('/deleteFile/{id}', [fileController::class, 'deleteFile'])->middleware(['auth'])->name('deleteFile');
    Route::get('/playVideo/{id}', [fileController::class, 'playVideo'])->middleware(['auth'])->name('playVideo');
    Route::get('/dowloandFile/{id}', [fileController::class, 'dowloandFile'])->middleware(['auth'])->name('dowloandFile');
});

//Inicio das rotas da parte de tesoureiro treasurer
Route::group(['prefix' => 'treasurer', 'middleware' => ['role:treasurer']], function () {
    
    //Inicio da parte de insercao de entradas
    Route::post('/storeInput', [inputController::class, 'storeInput'])->middleware(['auth'])->name('storeInput');
    Route::get('/addInput', [inputController::class, 'addInput'])->middleware(['auth'])->name('addInput');
    Route::get('/allInput', [inputController::class, 'allInput'])->middleware(['auth'])->name('allInput');
    Route::post('/updateInput/{id}', [inputController::class, 'updateInput'])->middleware(['auth'])->name('updateInput');
    Route::get('/deleteInput/{id}', [inputController::class, 'deleteInput'])->middleware(['auth'])->name('deleteInput');
    Route::get('/dowloandPDF', [inputController::class, 'dowloandPdf'])->middleware(['auth'])->name('dowloandPDF');
   
    //Inicio da parte de insercao de saidas
    Route::post('/storeOutput', [outputController::class, 'storeOutput'])->middleware(['auth'])->name('storeOutput');
    Route::get('/addOutput', [outputController::class, 'addOutput'])->middleware(['auth'])->name('addOutput');
    Route::get('/allOutput', [outputController::class, 'allOutput'])->middleware(['auth'])->name('allOutput');
    Route::post('/updateOutput/{id}', [outputController::class, 'updateOutput'])->middleware(['auth'])->name('updateOutput');
    Route::get('/deleteOutput/{id}', [outputController::class, 'deleteOutput'])->middleware(['auth'])->name('deleteOutput');
    Route::get('/dowloandPdf', [outputController::class, 'dowloandPdf'])->middleware(['auth'])->name('dowloandPdf');
});

//Inicio das rotas da parte de membros
Route::get('/autoMember', [dashboardController::class, 'autoMember'])->name('autoMember');
Route::get('/loginMembers', [dashboardController::class, 'loginMembers'])->name('loginMembers');
Route::post('/loginMember', [memberController::class, 'loginMember'])->name('loginMember');
Route::get('/logoutMember', [memberController::class, 'logout'])->name('logoutMember');
Route::post('/Login_member', [memberController::class, 'Login_member'])->name('Login_member');

//Inicio das rotas da parte de membro
Route::group(['prefix' => 'member', 'middleware' => ['role:member']], function () {

    //Inicio das rotas para os comunicados    
    Route::post('/storeAnnouncementMember', [memberAnnouncementController::class, 'storeAnnouncementMember'])->middleware(['auth'])->name('storeAnnouncementMember');
    Route::get('/addAnnouncementMember', [memberAnnouncementController::class, 'addAnnouncementMember'])->middleware(['auth'])->name('addAnnouncementMember');
    Route::get('/allAnnouncementMember', [memberAnnouncementController::class, 'allAnnouncementMember'])->middleware(['auth'])->name('allAnnouncementMember');
    Route::post('/updateAnnouncementMember/{id}', [memberAnnouncementController::class, 'updateAnnouncementMember'])->middleware(['auth'])->name('updateAnnouncementMember');
    Route::get('/showAnnouncementMember/{id}', [memberAnnouncementController::class, 'showAnnouncementMember'])->middleware(['auth'])->name('showAnnouncementMember');
    Route::get('/deleteAnnouncementMember/{id}', [memberAnnouncementController::class, 'deleteAnnouncementMember'])->middleware(['auth'])->name('deleteAnnouncementMember');

    //Inicio da parte responsavel por fazer a insercao de pedidos de oracao 
    Route::post('/storePrayer', [prayerController::class, 'storePrayer'])->middleware(['auth'])->name('storePrayer');
    Route::get('/addPrayer', [prayerController::class, 'addPrayer'])->middleware(['auth'])->name('addPrayer');
    Route::get('/allPrayer', [prayerController::class, 'allPrayer'])->middleware(['auth'])->name('allPrayer');
    Route::post('/updatePrayer/{id}', [prayerController::class, 'updatePrayer'])->middleware(['auth'])->name('updatePrayer');
    Route::get('/deletePrayer/{id}', [prayerController::class, 'deletePrayer'])->middleware(['auth'])->name('deletePrayer');  
});

//Inicio das outras rotas do sistema
Route::post('/lock-screen', function () {
    session(['lock_screen' => true]);
});

Route::get('/lock-screen', function () {
    return view('Another.lock-screen');
})->name('lock-screen');

  
require __DIR__.'/auth.php';