<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'customer_id',
        'user_id',
        'sale_date',
        'subtotal',
        'tax',
        'total',
    ];

    protected $casts = [
        'sale_date' => 'date',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    /**
     * Relación con Customer.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Relación con User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con los detalles de la venta.
     
    public function details()
    {
        return $this->hasMany(SaleDetail::class);
    }*/
}
