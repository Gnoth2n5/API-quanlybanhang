<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'stock', 'image'];

    // Relationship with OrderItem
    public function orderItems(): HasMany
    {
        return $this->hasMany(related: OrderItem::class);
    }

    // Relationship with Category
    public function category(): BelongsTo
    {
        return $this->belongsTo(related: Categories::class);
    }
}
