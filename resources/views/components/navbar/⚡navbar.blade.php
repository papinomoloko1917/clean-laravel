<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="navbar bg-base-100 shadow-sm">
    <div class="flex-1">
        <a href="#" class="select-none text-2xl font-bold">{{ config('app.name') }}</a>
    </div>
    <div class="flex-none">
        <div class="dropdown dropdown-end space-x-3">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                        <path d="m2.05 2.05 1.099-.028a1 1 0 0 1 1.008.815l2.69 14.347A1 1 0 0 0 7.83 18H18" />
                        <path d="M4.563 5h16.435a1 1 0 0 1 .981 1.204l-1.026 6.226A2 2 0 0 1 18.962 14H6.25" />
                        <circle cx="18" cy="20" r="2" />
                        <circle cx="8" cy="20" r="2" />
                    </svg>
                    <span class="badge badge-sm indicator-item">8</span>
                </div>
            </div>
            <div tabindex="0" class="card card-sm dropdown-content bg-base-100 z-1 mt-3 w-52 shadow">
                <div class="card-body">
                    <span class="text-lg font-bold">8 Items</span>
                    <span class="text-info">Subtotal: $999</span>
                    <div class="card-actions">
                        <button class="btn btn-primary btn-block">View cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li>
                    <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
</div>
