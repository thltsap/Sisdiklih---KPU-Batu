<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::resource('/contact-user', ContactUserController::class);
Route::resource('/formUser', FormUserController::class);
Route::get('/panduan',[HomeController::class,'panduan'])->name('panduan');
Route::get('/kpu',[HomeController::class,'kpu'])->name('kpu');

// Route::get('/admin', [DashboardController::class, 'index'])
//         ->name('dashboard');
       
//         Route::resource('/user-data', UserDataController::class);
//         Route::resource('/contact', ContactController::class);        
Route::prefix('admin')
    //->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
       
        Route::resource('/user-data', UserDataController::class);
        Route::resource('/contact', ContactController::class);  
    });       
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
