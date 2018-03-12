<?php

require_once __DIR__ . "/../vendor/autoload.php";

print 'Validate & exchange coupon' . PHP_EOL;

$coupon = new ValidateCoupon;
//'123-456-789'
print 'Validate coupon'
	. ' INT ' . $coupon->validate() . PHP_EOL;

//
// let's add some speed to the zombie
//
$coupon= new ExchangeCoupon($coupon);
print 'Validate & Exchange'
	. ' INT ' . $coupon->validate(). PHP_EOL
	. ' INT ' . $coupon->exchange(). PHP_EOL;



