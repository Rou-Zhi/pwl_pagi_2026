<?php

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Product::with('suppliers')->get();
});


