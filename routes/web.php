<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;


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

// Route 
Route::get('/',[HomeController::class,'index']);

// Route Prefix
Route::prefix('product')->group(function () {
    Route::get('1',[ProductController::class,'product']);
     
});

//Route Parameter
Route::get('/news/{id}', function ($id) {
    return 'oke';
    
    
});
    
// Route Prefix
Route::prefix('program')->group(function () {
    Route::get('1',[ProgramController::class,'program']);    
});

// Route Public
Route::get('/about',[AboutusController::class,'about']);

// Route Resource
Route::get('/contact',[ContactusController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
