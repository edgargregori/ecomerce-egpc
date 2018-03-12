<?php

include_once __DIR__ . '/../vendor/autoload.php';


$codeCoupon = "aaa-1234";
$productId = 22; //20 // 'Olive oil'


$discountByProduct = new Coupons\Coupon(
    new Discounts\ByProduct($codeCoupon, $productId)
);
$discountByCategory = new Coupons\ExchangeCoupon(
    new Discounts\ByCategory($codeCoupon, $productId)
);

$discountByProduct->calculate($codeCoupon, $productId);
$discountByCategory->calculate($codeCoupon, $productId);





