<?php

use Livewire\Component;
use App\Models\Product;

new class extends Component {
    public $id;
    public $product;

    public function mount()
    {
        $this->product = Product::find($this->id);
    }
};
?>

<div>
    <div class="card bg-base-100 w-96 shadow-sm">
        <figure>
            <img src="{{ $product->img }}" alt="{{ $product->title }}" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">{{ $product->title }}</h2>
            <p>{{ $product->description }}</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Купить</button>
            </div>
        </div>
    </div>

</div>
