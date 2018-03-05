<?php

use App\Models\ProductPricing\ProductPricing;
use App\Models\Product\Product;
use Faker\Generator as Faker;

$factory->define(ProductPricing::class, function (Faker $faker) {
    $product = Product::inRandomOrder()->get();
    $product = $product->first()->id;

    return [
            'product_id' => $product,
            'base_price' => rand(2, 199),
            'date_created' => $faker->dateTime(),
            'date_expiry' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 28 days'),
            'in_active' => 'y'

    ];
});
