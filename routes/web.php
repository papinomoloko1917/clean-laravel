<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

Route::middleware('auth')->prefix('/products')->group(function () {
    Route::livewire('', 'pages::product.index')->name('product.index');
    Route::livewire('{id}/show', 'pages::product.show')->name('product.show');
    Route::livewire('/cart', 'pages::product.cart')->name('cart.index');
});

Route::middleware('guest')->prefix('/auth')->group(function () {
    Route::livewire('/register', 'pages::auth.register')->name('register');
    Route::livewire('/login', 'pages::auth.login')->name('login');
});
