<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[userController::class,'allUsers'])->name('home');
Route::post('/add',[userController::class,'addUser'])->name('addUser');
Route::get('/viewuser/{id}',[userController::class,'viewUser'])->name('viewuser');
Route::get('deleteuser/{id}',[userController::class,'deleteUser'])->name('deleteuser');
Route::get('updateuser/{id}',[userController::class,'updateUser'])->name('updateuser');
Route::post('/update/{id}',[userController::class,'update'])->name('update');

Route::view('newuser','/adduser');