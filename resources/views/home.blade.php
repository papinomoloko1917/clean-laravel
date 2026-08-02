@extends('layouts.app')
<h1>Домашняя страница</h1>
@auth
    <h1>Здравствуй {{ Auth::user()->name }}</h1>
    <form action="{{ route('logout') }}" method="POST">
        <button type="submit" class="btn btn-neutral btn-outline">Выход</button>
    </form>
@else
    <a href="{{ route('register') }}" class="btn btn-neutral btn-outline">Регистрация</a>
    <a href="{{ route('login') }}" class="btn btn-neutral btn-outline">Вход</a>
@endauth
