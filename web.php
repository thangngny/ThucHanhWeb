<?php

use App\Http\Controllers\Controller_Prac02\ClassRoomController;
use App\Http\Controllers\Controller_Prac02\StudentController;
use App\Http\Controllers\Controller_Prac03\ComputerController;
use App\Http\Controllers\Controller_Prac03\IssueController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Controller_Post\PostController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\MedicineController;
//use App\Http\Controllers\SaleController;
// Trang chủ
Route::get('/', function () {
    return view('welcome');
});

// Route ví dụ (controller ExampleController)
Route::get('/example', [ExampleController::class, 'show']);

Route::resource('medicines', \App\Http\Controllers\Controller_Prac01\MedicineController::class);
Route::resource('sales', \App\Http\Controllers\Controller_Prac01\SaleController::class);

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

Route::get('/classes', [ClassRoomController::class, 'index'])->name('classes.index');
Route::get('/classes/{id}', [ClassRoomController::class, 'show'])->name('classes.show');
Route::get('/computers', [ComputerController::class, 'index'])->name('computers.index');
Route::get('/issues', [IssueController::class, 'index'])->name('issues.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // Danh sách bài viết
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Form tạo bài viết
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Lưu bài viết
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show'); // Chi tiết bài viết
