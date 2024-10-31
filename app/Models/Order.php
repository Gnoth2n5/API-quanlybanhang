<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['customer_id', 'order_date', 'status', 'total_amount'];

    // Relationship with Customer
    public function customer(): BelongsTo
    {
        return $this->belongsTo(related: Customer::class);
    }

    // Relationship with OrderItem
    public function orderItems(): HasMany
    {
        return $this->hasMany(related: OrderItem::class);
    }
}
