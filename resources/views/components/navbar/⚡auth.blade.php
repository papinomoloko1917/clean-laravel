<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="dropdown dropdown-end">
    {{-- Аватар --}}
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full items-center justify-center flex border">
            <span class="font-semibold text-xl">{{ str(auth()->user()->name)->substr(0, 1) }}</span>
        </div>
    </div>

    {{-- Меню --}}
    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li class="menu-title">
            <span>{{ auth()->user()->name }}</span>
        </li>

        <li>
            <a href="#">
                Профиль
            </a>
        </li>

        <li>
            <a href="#">
                Настройки
            </a>
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="cursor-pointer w-full text-left">
                    Выйти
                </button>
            </form>
        </li>
    </ul>
</div>
