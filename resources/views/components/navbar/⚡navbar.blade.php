<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="navbar bg-base-100 shadow-sm">
    <div class="flex-1">
        <a wire:navigate href="/" class="select-none text-2xl font-bold">
            {{ config('app.name') }}
        </a>
    </div>

    <div class="flex-none gap-2">
        {{-- Корзина --}}
        <livewire:navbar.cart />

        {{-- Неавторизованный пользователь --}}
        @guest
            <a wire:navigate href="{{ route('register') }}" class="btn btn-neutral btn-sm">
                Регистрация
            </a>

            <a wire:navigate href="{{ route('login') }}" class="btn btn-neutral btn-sm">
                Вход
            </a>
        @endguest

        {{-- Авторизованный пользователь --}}
        @auth
            <livewire:navbar.auth />
        @endauth
    </div>
</div>
