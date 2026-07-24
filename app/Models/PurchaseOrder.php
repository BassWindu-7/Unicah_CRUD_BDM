<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
     protected $fillable = [
        'supplier_id',
        'user_id',
        'purchase_date',
        'subtotal',
        'tax',
        'total',
    ];

    protected $casts = [
        'purchase_date' => 'date',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    /**
     * Relación con Supplier.
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    /**
     * Relación con User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con los detalles de la orden de compra.
     
    public function details()
    {
        return $this->hasMany(PurchaseOrderDetail::class);
    }
        */
}
