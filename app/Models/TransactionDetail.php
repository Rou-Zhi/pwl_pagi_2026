<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
        'price'
    ];

    protected $table = 'transaction_details';

    public $timestamp = true;

    public function product() {
        return $this->belongsTo(Product::Class, 'product_id', 'id');
    }

    public function transaction() {
        return $this->belongsTo(Transaction::Class, 'transaction_id', 'id');
    }
}
