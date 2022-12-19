<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
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
Route::get('/home-version-two',[FrontEndController::class,'homeVersionTwo'])->name('home-version-two');
Route::get('/home-box-layout',[FrontEndController::class,'homeBoxLayout'])->name('home-box-layout');
Route::get('/job-board',[FrontEndController::class,'jobBoard'])->name('job-board');
Route::get('/single-job-post',[FrontEndController::class,'singleJobPost'])->name('single-job-post');
Route::get('/job-detail',[FrontEndController::class,'jobDetail'])->name('job-detail');
Route::get('/about',[FrontEndController::class,'about'])->name('about');
Route::get('/candidate',[FrontEndController::class,'candidate'])->name('candidate');
Route::get('/resume',[FrontEndController::class,'resume'])->name('resume');
Route::get('/blog',[FrontEndController::class,'blog'])->name('blog');
Route::get('/blog-details',[FrontEndController::class,'blogDetails'])->name('blog-details');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');

Route::get('/candidate-register',[CandidateController::class,'candidateRegister'])->name('candidate-register');
Route::post('/new-candidate',[CandidateController::class,'saveCandidate'])->name('new-candidate');
Route::get('/candidate-login',[CandidateController::class,'candidateLogin'])->name('candidate-login');
Route::post('/new-login',[CandidateController::class,'newLogin'])->name('new-login');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
});
