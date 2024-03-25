<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
Route::post('/admin/restore/{id}', [AdminController::class, 'restore'])->name('admin.restore');
Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::group(['middleware' => 'role:admin'], function () {
    // Routes accessible only to admin users
});

Route::group(['middleware' => 'role:mod'], function () {
    // Routes accessible only to moderator users
});

Route::group(['middleware' => 'role:user'], function () {
    // Routes accessible only to regular users
});




































// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });
// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/user', [UserController::class, 'index'])->name('users.dashboard');
// });
