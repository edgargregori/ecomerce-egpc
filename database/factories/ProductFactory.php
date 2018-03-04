<?php

use App\Models\ProductCategory\ProductCategory;
//use App\Models\Product\Product;
use Faker\Generator as Faker;

$factory->define(App\Models\Product\Product::class, function (Faker $faker) {
    $product_category = ProductCategory::inRandomOrder()->get();
    $product_category_id = $product_category->first()->id;
    return [
      'product_category_id' => $product_category_id,   //
      'product_name' => 'name-' . $product_category_id,
      'product_description' => 'description-'. $product_category_id,   //
      'units_in_stock' => rand(1, 99),   //
      'reward_points_credit' => rand(0, 200) 
    ];
});
