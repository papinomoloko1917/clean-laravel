<?php

use Livewire\Component;

new class extends Component {
    public $count = 0;

    public function clearCount()
    {
        $this->count = 0;
    }
    public function upCount()
    {
        ++$this->count;
    }
    public function downCount()
    {
        if ($this->count <= 0) {
            $this->count = 0;
        } else {
            --$this->count;
        }
    }
};
?>

<div>
    <div class="mt-6">
        <ul class="list bg-base-100 rounded-box shadow-md">
            <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Most played songs this week</li>
            <li class="list-row">
                <div><img class="size-10 rounded-box" alt="Tailwind CSS list item"
                        src="https://img.daisyui.com/images/profile/demo/1@94.webp" /></div>
                <div>
                    <div>Dio Lupa</div>
                    <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                </div>
                <button wire:click="downCount" class="btn btn-square btn-ghost text-xl">
                    -
                </button>
                <input type="number" value="{{ $this->count }}" class="w-8">
                <button wire:click="upCount" class="btn btn-square btn-ghost text-xl">
                    +
                </button>
                <button wire:click="clearCount" class="btn btn-error text-black">
                    Удалить
                </button>
            </li>
        </ul>
    </div>
</div>
