<?php

use Livewire\Component;
use App\Models\Product;

new class extends Component {
    public $products = [];

    public function mount()
    {
        $this->products = Product::get();
    }
};
?>

<div>

</div>
