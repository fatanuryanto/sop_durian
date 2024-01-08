<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MenuController::class,'index']);
Route::get('/dine_in',[OrderController::class,'dine_in']);
Route::get('/take_away',[OrderController::class,'take_away']);
Route::post('/order/store',[OrderController::class,'store']);

Route::post('/orderDetail/store',[OrderDetailController::class,'store']);
Route::get('/orderDetail/confirmation',[OrderDetailController::class,'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/category',[CategoryController::class,'index']);
    Route::post('/category/store',[CategoryController::class,'store']);
    Route::get('/category/destroy/{id}',[CategoryController::class,'destroy']);

    Route::get('/menu/create',[MenuController::class,'create']); 
    Route::post('/menu/store',[MenuController::class,'store']);
    Route::get('/menu/edit/{id}',[MenuController::class,'edit']);
    Route::post('/menu/update/{id}',[MenuController::class,'update']);
    Route::get('/menu/destroy/{id}',[MenuController::class,'destroy']);

    Route::get('/order',[OrderController::class,'index']);
    Route::get('/order/deliver/{id}',[OrderDetailController::class,'deliver']);
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
