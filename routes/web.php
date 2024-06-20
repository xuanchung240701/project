<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->name('home');
});

Route::get('/students', [StudentController::class, 'index'])->name('student.all');
Route::get('/add-student', [StudentController::class, 'addStudent'])->name('student.add');
Route::post('/add-student', [StudentController::class, 'store'])->name('student.store'); 
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('student.edit'); 
Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('student.update'); 
Route::get('/delete-student/{id}', [StudentController::class, 'delete'])->name('student.delete'); 


Route::get('/register',[UsersController::class , 'register'])->name('register');
Route::post('/register',[UsersController::class , 'registerPost'])->name('user.register');
Route::get('/login',[UsersController::class, 'login'])->name('login');
Route::post('/login',[UsersController::class, 'loginPost'])->name('user.login');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('products', ProductController::class);
// });