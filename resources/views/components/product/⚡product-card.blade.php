<?php

use App\Models\Product;
use Livewire\Component;

new class extends Component
{
    public $products = [];

    public function mount()
    {
        $this->products = Product::get();
    }
};
?>

<div>
    <div class="container mx-auto grid grid-cols-1 justify-items-center gap-4 px-4 py-8 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($this->products as $product)
            <div class="card bg-base-100 flex h-full w-96 flex-col shadow-sm">
                <figure class="hover:scale-103 aspect-video overflow-hidden transition-all duration-300">
                    <img class="h-full w-full object-contain" src="{{ asset("/storage/cars/{$product->image}") }}"
                        alt="{{ $product->name }}.png" />
                </figure>
                <div class="card-body flex flex-1 flex-col">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p class="flex-1">{{ \Illuminate\Support\Str::words($product->description, 15) }}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Добавить +</button>
                    </div>
                </div>
            </div>
        @empty
            <p>В товарах пусто!</p>
        @endforelse
    </div>
</div>
