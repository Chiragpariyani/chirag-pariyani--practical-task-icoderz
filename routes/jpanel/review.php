<?php

use App\Http\Controllers\Jpanel\review\ReviewController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
  // Reviews
  Route::get('/review', [ReviewController::class,'Review'])->name('review');
  Route::post('/review/store/', [ReviewController::class,'storeReview'])->name('store.review');
  Route::get('/review/edit/{id}', [ReviewController::class,'editReview'])->name('edit.review');
  Route::post('/review/update/{id}', [ReviewController::class,'updateReview'])->name('update.review');
  Route::post('/review/delete', [ReviewController::class,'deleteReview'])->name('delete.review');
        
});