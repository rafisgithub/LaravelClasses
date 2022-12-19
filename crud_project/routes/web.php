<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[FrontEndController::class,'index'])->name('/');
Route::get('/about',[FrontEndController::class,'about'])->name('about');
Route::get('/course',[FrontEndController::class,'course'])->name('course');
Route::get('/blog',[FrontEndController::class,'blog'])->name('blog');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/new-student', [StudentController::class, 'index'])->name('new.student');
Route::post('/student-delete', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/update-student', [StudentController::class, 'update'])->name('update.student');

