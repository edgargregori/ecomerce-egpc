<?php

use App\Models\ProductCategory\ProductCategory;
use App\Models\ProductCategoryDiscount\ProductCategoryDiscount;
use Faker\Generator as Faker;

$factory->define(ProductCategoryDiscount::class, function (Faker $faker) {
    $product_category = ProductCategory::inRandomOrder()->get();
    return [
        'product_category_id' => $product_category->first()->id,
        'discount_value' => rand(1, 100) / 100,
        'discount_unit' => '$Bs',
        'date_created' => $faker->dateTime(),
        'valid_until' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 7 days'),
        'coupon_code' => 'code-xxx',
        'minimum_order_value' => 5,
        'maximum_discount_amount' => 99,
        'is_redeem_allowed' => 's',
    ];
});
