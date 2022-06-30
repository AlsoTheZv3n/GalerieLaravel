<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriesController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\UsersController;


Route::get('/', function() {
    return view('/galeriesOverview');
});

Route::get('/galeries/create', function() {
    return view('galeriesNew');
});

Route::get('/photos/create/{galerie_id}', function() {
    return view('photosCreate');
});

Route::post('/photos/create/{galerie_id}' , [PhotosController::class, 'create']);

Route::get('/galeries/edit/{galerieId}', [GaleriesController::class, 'edit']);


Route::put('/galeries/edit/{galerieId}', [GaleriesController::class, 'update']);


Route::get('/image/edit/{photoId}', [PhotosController::class, 'edit']);


Route::put('/image/edit/{photoId}', [PhotosController::class, 'update']);


Route::get('photos/{galerieId}' , [PhotosController::class, 'index']);

Route::get('/image/view/{photosId}' , [PhotosController::class, 'view']);

Route::get('/' , [GaleriesController::class, 'index']);
Route::get('/galeriesOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');

Route::get('/galeriesDetailOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');

Route::get('/galeriesview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');

// create galleries (file upload)
Route::post('/galeries/create' , [GaleriesController::class, 'create']);

Route::get('/admin' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}/edit' , [AdminsController::class, 'edit']);
Route::get('/admins/{admin}/destroy' , [AdminsController::class, 'destroy']);


Route::get('/admin/edit/{adminId}', [AdminsController::class, 'edit']);

Route::put('/admin/edit/{adminId}', [AdminsController::class, 'update']);

Route::delete('/delete/user/{userId}', [UsersController::class, 'destroy']);


Route::get('/users/{id}', [UsersController::class, 'show']);





