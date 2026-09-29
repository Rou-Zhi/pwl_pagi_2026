<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'barcode_number',
        'product_name',
        'buy_price',
        'sell_price',
        'supplier_id'
    ];

    protected $table = 'products';

    public $timestamp = true;

    public function suppliers() {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
