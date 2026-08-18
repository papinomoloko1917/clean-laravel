<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home.index');

Route::prefix('/products')->group(function () {
    Route::livewire('', 'pages::product.index')->name('product.index');
    Route::livewire('{id}/show', 'pages::product.show')->name('product.show');
})->middleware('auth');

Route::prefix('/auth')->group(function () {
    Route::livewire('/register', 'pages::auth.register')->name('auth.register');
    Route::livewire('/login', 'pages::auth.login')->name('auth.login');
});
