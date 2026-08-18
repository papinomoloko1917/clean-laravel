<?php

use Livewire\Component;
use App\Models\Product;

new class extends Component {
    public $products;

    public function mount()
    {
        $this->products = Product::get();
    }
};
?>

<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-26 mt-6">
        @forelse ($products as $product)
            <div class="card bg-base-100 w-96 shadow-sm">
                <figure>
                    <img src="{{ $product->img }}" alt="{{ $product->title }}" />
                </figure>
                <div class="card-body">
                    <a href="{{ route('product.show', $product->id) }}" wire:navigate>
                        <h2 class="card-title text-xl text-gray-900 hover:text-blue-600 transition-all duration-150">
                            {{ $product->title }}</h2>
                    </a>
                    <p>{{ $product->description }}</p>
                    <div class="flex items-center justify-between mt-2">
                        <div>
                            <p class="text-lg font-bold">{{ $product->price }} ₽</p>
                            <p class="text-sm text-gray-500">В наличии: {{ $product->quantity }} шт.</p>
                        </div>
                        <button class="btn btn-neutral btn-outline">Купить</button>
                    </div>
                </div>
            </div>
        @empty
            <p>Товаров пока нет</p>
        @endforelse
    </div>
</div>
