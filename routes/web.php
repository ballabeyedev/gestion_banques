<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\EmployerController;


Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/index', [AuthController::class, 'handlogin'])->name('handlogin');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('admin', [AppController::class, 'admin'])->name('admin');
    Route::get('employer', [AppController::class, 'employer'])->name('employer');
    Route::get('client', [AppController::class, 'client'])->name('client');
    Route::get('/creationcomptebancaire', [EmployerController::class, 'creationcomptebancaire'])->name('employer.creationcomptebancaire');
    Route::post('/store', [EmployerController::class, 'store'])->name('employer.store');

});

