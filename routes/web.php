<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;

Route::get('/todos', [TodoController::class, 'index']);

Route::get('todos/create', [TodoController::class, 'createTodo']);

Route::post('/todos/create',[TodoController::class,'store']);

Route::get('/todos/edit', [TodoController::class, 'editTodo']);



Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', [UserController::class, 'uploadAvatar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
