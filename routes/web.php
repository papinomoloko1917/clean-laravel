<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

// Route::middleware('guest')->prefix('auth')->group(function () {
//     Route::livewire('/login', 'pages::auth.login')->name('login');
//     Route::livewire('/register', 'pages::auth.register')->name('register');
// });
