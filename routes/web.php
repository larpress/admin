<?php

use Illuminate\Support\Facades\Route;
use Larpress\Admin\Http\Controllers\Auth\LoginController;
use Larpress\Admin\Http\Controllers\HomeController;

Route::prefix(config('admin.route.prefix'))->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::middleware([])->prefix(config('admin.route.prefix'))->name('admin.')->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});