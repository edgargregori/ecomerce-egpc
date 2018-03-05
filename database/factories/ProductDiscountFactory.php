<?php

use App\Models\ProductDiscount\ProductDiscount;
use App\Models\Product\Product;
use Faker\Generator as Faker;

$factory->define(ProductDiscount::class, function (Faker $faker) {
    $product = Product::inRandomOrder()->get();
    $product = $product->first()->id;

    return [
        'product_id' => $product,
        'discount_value' => rand(1, 100) / 100,
        'discount_unit' => '$Bs',
        'date_created' => $faker->dateTime(),
        'valid_until' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 28 days'),
        'coupon_code' => 'code-xxx',
        'minimum_order_value' => 5,
        'maximum_discount_amount' => 99,
        'is_redeem_allowed' => 'y'

    ];
});
