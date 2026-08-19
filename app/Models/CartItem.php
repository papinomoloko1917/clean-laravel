<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function product()
    {
        return $this->BelongsTo(Product::class);
    }
}
