<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'product_or_service_id', 'product_type', 'quantity', 'item_price'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}