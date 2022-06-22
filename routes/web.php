<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriesController;


Route::get('/', [GaleriesController::class, 'view']);

Route::get('/galeries/create', function() {
    return view('galeriesNew');
});

Route::get('/galeriesOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');

Route::get('/galeriesDetailOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');

Route::get('/galeriesview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');

// create galleries (file upload)
Route::post('/galeries/create' , [GaleriesController::class, 'create']);

Route::get('/admin' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}/edit' , [AdminsController::class, 'edit']);
Route::get('/admins/{admin}/destroy' , [AdminsController::class, 'destroy']);

Route::get('/users/{id}', [UsersController::class, 'show']);





