<?php

use Livewire\Component;
use App\Models\User;

new class extends Component {
    public $email;
    public $password;

    public function render()
    {
        return $this->view()->layout('layouts.clean');
    }
};
?>

<div>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <div class="flex items-center justify-center min-h-screen">
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Вход</legend>

                <label class="label">Email</label>
                <input name="email" type="email" class="input" placeholder="Имя" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror

                <label class="label">Пароль</label>
                <input name="password" type="password" class="input" placeholder="Пароль" />
                @error('password')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn btn-neutral mt-4">Войти</button>
                <a href="{{ route('home') }}" wire:navigate class="btn btn-outline mt-4">На главную</a>
            </fieldset>
        </div>
    </form>


</div>
