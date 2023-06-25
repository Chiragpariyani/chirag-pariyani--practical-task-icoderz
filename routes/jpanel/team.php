<?php

use App\Http\Controllers\Jpanel\team\TeamController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
  // Team
  Route::get('/team', [TeamController::class,'team'])->name('team');
  Route::post('/team/store/', [TeamController::class,'storeTeam'])->name('store.team');
  Route::get('/team/edit/{id}', [TeamController::class,'editTeam'])->name('edit.team');
  Route::post('/team/update/{id}', [TeamController::class,'updateTeam'])->name('update.team');
  Route::post('/team/delete', [TeamController::class,'deleteTeam'])->name('delete.team');
        
});