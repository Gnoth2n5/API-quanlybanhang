<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    // Relationship with Order
    public function order(): BelongsTo
    {
        return $this->belongsTo(related: Order::class);
    }

    // Relationship with Product
    public function product(): BelongsTo
    {
        return $this->belongsTo(related: Product::class);
    }
}
