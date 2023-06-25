<?php

use App\Http\Controllers\Jpanel\package\packageController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/package/list', [packageController::class,'packageList'])->name('list.package');
    Route::get('/package/create', [packageController::class,'createPackage'])->name('create.package');
    Route::post('/package/add', [packageController::class,'addpackage'])->name('add.package');
    Route::post('/package/status', [packageController::class,'statusPackage'])->name('status.package');
    Route::post('/package/delete', [packageController::class,'deletepackage'])->name('delete.package');
    Route::get('/package/dashboard/{id}', [packageController::class,'dashboardPackage'])->name('dashboard.package');
    Route::get('/package/edit/{id}', [packageController::class,'editPackage'])->name('edit.package');
    Route::post('/package/update/{id}', [packageController::class,'updatePackage'])->name('update.package');
    
    // Scedule and Itiniary
    Route::get('/package/scehdule/{id}', [packageController::class,'packageScedule'])->name('scehdule.package');
    Route::post('/package/scehdule/store/{id}', [packageController::class,'storeschedule'])->name('store.schedule');
    Route::get('/package/scehdule/edit/{id}', [packageController::class,'editSchedule'])->name('edit.schedule');
    Route::post('/package/scehdule/update/{id}', [packageController::class,'updateSchedule'])->name('update.schedule');
    Route::post('/package/scehdule/delete', [packageController::class,'deleteSchedule'])->name('delete.schedule');

    // Attraction
    Route::get('/package/attraction/{id}', [packageController::class,'packageAttraction'])->name('attraction.package');
    Route::post('/package/attraction/store/{id}', [packageController::class,'storeAttraction'])->name('store.attraction');
    Route::get('/package/attraction/delete/{id}', [packageController::class,'deleteAttraction'])->name('delete.attraction');
    // Photos
    Route::get('/package/photo/{id}', [packageController::class,'packagePhoto'])->name('photo.package');
    Route::post('/package/photo/store/{id}', [packageController::class,'storePhoto'])->name('store.photo');
    Route::get('/package/photo/delete/{id}', [packageController::class,'deletePhoto'])->name('delete.photo');
    // Inclusion
    Route::get('/package/inclusion/{id}', [packageController::class,'packageInclusion'])->name('inclusion.package');
    Route::post('/package/inclusion/store/{id}', [packageController::class,'storeInclusion'])->name('store.inclusion');
    Route::get('/package/inclusion/edit/{id}', [packageController::class,'editInclusion'])->name('edit.inclusion');
    Route::post('/package/inclusion/update/{id}', [packageController::class,'updateInclusion'])->name('update.inclusion');
    Route::post('/package/inclusion/delete', [packageController::class,'deleteInclusion'])->name('delete.inclusion');
    // Exclusion
    Route::get('/package/exclusion/{id}', [packageController::class,'packageExclusion'])->name('exclusion.package');
    Route::post('/package/exclusion/store/{id}', [packageController::class,'storeExclusion'])->name('store.exclusion');
    Route::get('/package/exclusion/edit/{id}', [packageController::class,'editExclusion'])->name('edit.exclusion');
    Route::post('/package/exclusion/update/{id}', [packageController::class,'updateExclusion'])->name('update.exclusion');
    Route::post('/package/exclusion/delete', [packageController::class,'deleteExclusion'])->name('delete.exclusion');
    // Dates
    Route::get('/package/date/{id}', [packageController::class,'packageDate'])->name('date.package');
    Route::post('/package/date/store/{id}', [packageController::class,'storeDate'])->name('store.date');
    Route::post('/package/date/delete', [packageController::class,'deleteDate'])->name('delete.date');
     // Things To carry
     Route::get('/package/carry/{id}', [packageController::class,'packageCarry'])->name('carry.package');
     Route::post('/package/carry/store/{id}', [packageController::class,'storeCarry'])->name('store.carry');
     Route::get('/package/carry/edit/{id}', [packageController::class,'editcarry'])->name('edit.carry');
     Route::post('/package/carry/update/{id}', [packageController::class,'updateCarry'])->name('update.carry');
     Route::post('/package/carry/delete', [packageController::class,'deleteCarry'])->name('delete.carry');







    
});