<?php

namespace App\Models\Product;

use App\Models\ProductCategory\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    //
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
