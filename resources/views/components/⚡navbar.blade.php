<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="-1"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a>Home</a></li>
                </ul>
            </div>
            <a wire:navigate href="{{ route('home') }}"
                class="mx-3 text-3xl font-extrabold text-gray-900">{{ $title ?? config('app.name') }}</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
            </ul>
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('product.index') }}" wire:navigate>Товары</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-6">

            @auth
                <button class="btn">Здравствуй {{ auth()->user()->name }}</button>

                <div class="indicator">
                    <span class="indicator-item badge badge-secondary badge-xs">{{ $this->count ?? 0 }}</span>
                    <a class="hover:text-blue-600 transition-all duration-200" href="{{ route('cart.index') }}"
                        wire:navigate><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-shopping-bag-icon lucide-shopping-bag">
                            <path d="M16 10a4 4 0 0 1-8 0" />
                            <path d="M3.103 6.034h17.794" />
                            <path
                                d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z" />
                        </svg></a>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-neutral">Выйти</button>
                </form>
            @else
                <a wire:navigate href="{{ route('login') }}" class="btn">Вход</a>
                <a wire:navigate href="{{ route('register') }}" class="btn btn-neutral">Регистрация</a>
            @endauth

        </div>
    </div>
</div>
