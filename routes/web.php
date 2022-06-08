<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('galerie');
});

Route::get('/' , [GaleriesController::class, 'index']);
Route::get('/galeriesOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');
Route::get('/edit/{id}' , [GaleriesController::class, 'edit'])->middleware('auth', 'editauth');
Route::put('/edit/{id}' , [GaleriesController::class, 'update'])->middleware('auth', 'editauth');

Route::get('/galeriesDetailOverview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');
Route::get('/edit/{id}' , [GaleriesController::class, 'edit'])->middleware('auth', 'editauth');
Route::put('/edit/{id}' , [GaleriesController::class, 'update'])->middleware('auth', 'editauth');

Route::get('/galeriesview/{id}' , [GaleriesController::class, 'view'])->middleware('auth', 'readauth');
Route::get('/edit/{id}' , [GaleriesController::class, 'edit'])->middleware('auth', 'editauth');
Route::put('/edit/{id}' , [GaleriesController::class, 'update'])->middleware('auth', 'editauth');


Route::get('/galerieEdit/{id}' , [GaleriesController::class, 'index']);
Route::get('/galerie' , [GaleriesController::class, 'create']);


Route::get('/admin' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}/edit' , [AdminsController::class, 'edit']);
Route::get('/admins/{admin}/destroy' , [AdminsController::class, 'destroy']);

Route::get('/users/{id}', [UsersController::class, 'show']);





