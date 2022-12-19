<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
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
Route::get('/',[SMSController::class,'index'])->name('/');
Route::get('/about',[SMSController::class,'about'])->name('about');
Route::get('/contact-us',[SMSController::class,'contactUs'])->name('contact-us');
Route::get('/student-login',[SMSController::class,'contactUs'])->name('student-login');
Route::get('/student-register',[SMSController::class,'contactUs'])->name('student-register');
Route::get('/teacher-login',[TeacherController::class,'teacherLogin'])->name('teacher-login');
Route::post('/teacher-login',[TeacherController::class,'teacherLoginCheck'])->name('teacher-login');

Route::group(['middleware'=>'teacher'],function (){
    Route::get('/teacher-logout',[TeacherController::class,'teacherLogout'])->name('teacher-logout');
    Route::get('/teacher-profile',[TeacherController::class,'teacherProfile'])->name('teacher-profile');
    Route::get('/add-course',[CourseController::class,'addCourse'])->name('add-course');
    Route::post('/new-course',[CourseController::class,'saveCourse'])->name('new-course');
    Route::get('/manage-course',[CourseController::class,'manageCourse'])->name('manage-course');

});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-teacher',[TeacherController::class,'addTeacher'])->name('add-teacher');
    Route::post('/new-teacher',[TeacherController::class,'saveTeacher'])->name('new-teacher');
    Route::get('/manage-teacher',[TeacherController::class,'manageTeacher'])->name('manage-teacher');
    Route::post('/delete-teacher',[TeacherController::class,'deleteTeacher'])->name('delete-teacher');
    Route::get('/edit-teacher/{id}',[TeacherController::class,'editTeacher'])->name('edit-teacher');
    Route::post('/update-teacherInf',[TeacherController::class,'updateTeacherInf'])->name('update-teacherInf');
});
