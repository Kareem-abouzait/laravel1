<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts',[ PostController::class,'index'])->name('index');

Route::get('/posts/{id}',[ PostController::class,'show'])->name('show');
Route::get('/posts/update/{id}',[ PostController::class,'update'])->name('update');
Route::put('/posts/update/edit/{id}',[ PostController::class,'edit'])->name('edit');
Route::get('/posts/delete/{id}',[ PostController::class,'destroy'])->name('delete');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');




