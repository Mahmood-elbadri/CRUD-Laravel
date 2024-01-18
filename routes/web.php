<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::resource('posts', PostController::class);

Route::get('/about',[PostController::class,'about'])->name('posts.about');

Route::get('/deleted',[PostController::class,'deleted'])->name('posts.deleted');

Route::get('/posts/restore/{id}',[PostController::class,'restore'])->name('posts.restore');

Route::get('/posts/{id}/delete',[PostController::class,'forceDelete'])->name('posts.forceDelete');
