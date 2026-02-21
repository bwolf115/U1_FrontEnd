<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('Home');
Route::view('/admin', 'admin')->name('Admin');
Route::view('/login', 'login')->name('Login');