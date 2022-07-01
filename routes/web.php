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
})->middleware('auth');

Route::get('/photos/create/{galerie_id}', function() {
    return view('photosCreate')->middleware('auth');
});

Route::post('/photos/create/{galerie_id}' , [PhotosController::class, 'create'])->middleware('auth');

Route::get('/galeries/edit/{galerieId}', [GaleriesController::class, 'edit'])->middleware('auth');


Route::put('/galeries/edit/{galerieId}', [GaleriesController::class, 'update'])->middleware('auth');


Route::get('/image/edit/{photoId}', [PhotosController::class, 'edit'])->middleware('auth');


Route::put('/image/edit/{photoId}', [PhotosController::class, 'update'])->middleware('auth');


Route::get('photos/{galerieId}' , [PhotosController::class, 'index'])->middleware('auth');

Route::get('/image/view/{photosId}' , [PhotosController::class, 'view'])->middleware('auth');

Route::get('/' , [GaleriesController::class, 'index'])->middleware(['auth']);

Route::get('/galeriesOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth');

Route::get('/galeriesDetailOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth');

Route::get('/galeriesview/{id}' , [GaleriesController::class, 'view'])->middleware('auth');

// create galleries (file upload)
Route::post('/galeries/create' , [GaleriesController::class, 'create'])->middleware('auth');

Route::get('/admin' , [AdminsController::class, 'index'])->middleware(['auth', 'adminauth']);
Route::get('/admins/{admin}' , [AdminsController::class, 'index'])->middleware('auth');
Route::get('/admins/{admin}/edit' , [AdminsController::class, 'edit'])->middleware('auth');
Route::get('/admins/{admin}/destroy' , [AdminsController::class, 'destroy'])->middleware('auth');


Route::get('/admin/edit/{adminId}', [AdminsController::class, 'edit'])->middleware('auth');

Route::put('/admin/edit/{adminId}', [AdminsController::class, 'update'])->middleware('auth');

Route::delete('/delete/user/{userId}', [UsersController::class, 'destroy'])->middleware('auth');


Route::get('/users/{id}', [UsersController::class, 'show'])->middleware('auth');







