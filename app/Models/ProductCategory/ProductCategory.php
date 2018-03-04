<?php

namespace App\Models\ProductCategory;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "product_category";
    //
    public function replies()
    {
        return $this->hasMany(__CLASS__, 'product_category_id');
    }
}
