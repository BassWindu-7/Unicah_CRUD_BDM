<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'brand_id',
        'unit_id',
        'code',
        'name',
        'description',
        'purchase_price',
        'sale_price',
        'stock',
        'minimum_stock',
        'status',
    ];

    protected $casts = [
        'purchase_price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'stock' => 'integer',
        'minimum_stock' => 'integer',
        'status' => 'boolean',
    ];

    /**
     * Relación con Category.
     */
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    /**
     * Relación con Brand.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Relación con Unit.
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
