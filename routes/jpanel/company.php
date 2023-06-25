<?php

use App\Http\Controllers\Jpanel\company\CompanyController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
  // company
  Route::get('/company/list', [CompanyController::class,'company'])->name('company');
  Route::get('/company/add', [CompanyController::class,'addCompany'])->name('add.company');
  Route::post('/company/store/', [CompanyController::class,'storeCompany'])->name('store.company');
  Route::get('/company/edit/{id}', [CompanyController::class,'editCompany'])->name('edit.company');
  Route::get('/company/view/{id}', [CompanyController::class,'viewCompany'])->name('view.company');
  Route::post('/company/update/{id}', [CompanyController::class,'updateCompany'])->name('update.company');
  Route::post('/company/delete', [CompanyController::class,'deleteCompany'])->name('delete.company');
        
});