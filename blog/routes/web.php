<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[BlogController::class,'index'])->name('/');
Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new-blog');
Route::get('/all-blogs',[BlogController::class,'allBlogs'])->name('all-blogs');
Route::post('/delete-blog',[BlogController::class,'deleteBlog'])->name('delete-blog');
Route::get('/edit-blog/{id}',[BlogController::class,'editBlog'])->name('edit-blog');
Route::post('/update-blog',[BlogController::class,'updateBlog'])->name('update-blog');
