<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'serial_number',
        'name',
        'sku',
        'description',
        'category_id',
        'supplier_id',
        'quantity',
        'min_stock',
        'last_purchase_date'
    ];

    protected $casts = [
        'last_purchase_date' => 'date',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
