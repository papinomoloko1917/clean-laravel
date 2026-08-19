<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return $this->view()->layout('layouts.clean');
    }
};
?>

<div>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="flex items-center justify-center min-h-screen">
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Регистрация</legend>

                <label class="label">Имя пользователя</label>
                <input name="name" type="name" class="input" placeholder="Имя" value="{{ old('name') }}" />
                @error('name')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror


                <label class="label">Email</label>
                <input name="email" type="email" class="input" placeholder="Email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror

                <label class="label">Пароль</label>
                <input name="password" type="password" class="input" placeholder="Пароль" />
                @error('password')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror

                <label class="label">Подтверждение пароля</label>
                <input name="password_confirmation" type="password" class="input"
                    placeholder="Password confirmation" />

                <button type="submit" class="btn btn-neutral mt-4">Регистрация</button>
            </fieldset>
        </div>
    </form>
</div>
