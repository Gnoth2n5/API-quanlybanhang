<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RevenueReport extends Model
{
    use HasFactory;

    protected $table = 'revenue_reports';

    protected $fillable = ['report_date', 'total_sales', 'best_selling_product_id', 'total_orders'];

    // Relationship with Product
    public function bestSellingProduct(): BelongsTo
    {
        return $this->belongsTo(related: Product::class, foreignKey: 'best_selling_product_id');
    }
}
