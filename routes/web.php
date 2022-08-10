<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
// Route::view('/', 'main')->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/dashboard', 'admin.dashboard.index')->name('dashboard');
Route::view('/login', 'login')->name('login');
Route::view('/departements', 'departements')->name('departements');
Route::view('/studentRegister', 'register')->name('studentRegister');
Route::view('/infrastructure', 'infrastructure')->name('infrastructure');

    //Origin CRUD Routes
    Route::get('/update/index', [App\Http\Controllers\UpdateController::class, 'index'])->name('update.index');
    Route::get('/update/allupdate', [App\Http\Controllers\UpdateController::class, 'allupdate'])->name('update.allupdate');
    Route::get('/update/create', [App\Http\Controllers\UpdateController::class, 'create'])->name('update.create');
    Route::post('/update/create', [App\Http\Controllers\UpdateController::class, 'save'])->name('update.save');
    Route::get('/update/edit/{id}', [App\Http\Controllers\UpdateController::class, 'edit']);
    Route::post('/update/edit', [App\Http\Controllers\UpdateController::class, 'update']);
    Route::get('/update/delete/{id}', [App\Http\Controllers\UpdateController::class, 'delete']);

     //Category CRUD Routes
     Route::get('/carousels/index', [App\Http\Controllers\CarouselController::class, 'index'])->name('carousel.index');
     Route::get('/carousels/allcarousels', [App\Http\Controllers\CarouselController::class, 'allCarousel'])->name('carousel.allcarousel');
     Route::get('/carousels/create', [App\Http\Controllers\CarouselController::class, 'create'])->name('carousel.create');
     Route::post('/carousels/create', [App\Http\Controllers\CarouselController::class, 'save'])->name('carousel.save');
     Route::get('/carousels/edit/{id}', [App\Http\Controllers\CarouselController::class, 'edit']);
     Route::post('/carousels/update', [App\Http\Controllers\CarouselController::class, 'update']);
     Route::get('/carousels/delete/{id}', [App\Http\Controllers\CarouselController::class, 'delete']);
