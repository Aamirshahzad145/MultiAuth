<?php

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\post\postController;
use App\Http\Controllers\logactivityController;
use App\Http\Controllers\student\studentController;

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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Web Routes for Post
|--------------------------------------------------------------------------
|
*/

    Route::get('/post',[postController::class,'index'])->middleware(['auth'])->name('post');
    Route::get('/post/create',[postController::class,'create'])->middleware(['auth'])->name('post.create');
    Route::get('/post/show/{id}',[postController::class,'show'])->middleware(['auth'])->name('post.show');
    Route::get('/post/edit/{id}',[postController::class,'edit'])->middleware(['auth'])->name('post.edit');
    Route::get('/post/destroy/{id}',[postController::class,'destroy'])->middleware(['auth'])->name('post.destroy');
    Route::put('post/update/{id}',[postController::class,'update'])->middleware(['auth'])->name('post.update');
    Route::post('/post/store',[postController::class,'store'])->middleware(['auth'])->name('post.store');

/*
|--------------------------------------------------------------------------
| Web Routes for Log Activity
|--------------------------------------------------------------------------
|
*/
    Route::get('/logactivity',[logactivityController::class,'index'])->middleware(['auth'])->name('logactivity');

/*
|--------------------------------------------------------------------------
| Web Routes for Student Registration
|--------------------------------------------------------------------------
|
*/
Route::middleware('auth')->group(function () {

    Route::get('/student',[studentController::class,'index'])->name('student');
    Route::get('/create',[studentController::class,'create'])->name('create.student');
    Route::get('/edit/{id}',[studentController::class,'edit'])->name('edit.student');
    Route::post('/store',[studentController::class,'store'])->name('student.store');
    Route::post('/update',[studentController::class,'update'])->name('student.update');
    Route::get('/delete/{id}',[studentController::class,'destroy'])->name('delete.student');

    });

/*
|--------------------------------------------------------------------------
| Web Routes for Profile
|--------------------------------------------------------------------------
|
*/

    Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Web Routes for Employee
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth', 'role:employee')->group(function () {

    Route::get('/Employee/profile', [DashboardController::class, 'Employee_profile'])->name('employee.profile');
});

/*
|--------------------------------------------------------------------------
| Web Routes for Admin
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth', 'role:admin')->group(function () {

    Route::get('/admin/profile', [DashboardController::class, 'Admin_profile'])->name('admin.profile');
    Route::post('/send/email', [MailController::class, 'sendEmail'])->name('send.email');
});

/*
|--------------------------------------------------------------------------
| Web Routes for User
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth', 'role:user')->group(function () {

    Route::get('/user/profile', [DashboardController::class, 'user_profile'])->name('user.profile');
});

require __DIR__.'/auth.php';
