<?php namespace Discounts;

class ByCategory implements Discount
{
	public function calculateDiscount($codeCoupon, $productId)
	{
		echo 'Discount by category: '. $codeCoupon, $productId . '20 $Us.' . PHP_EOL;
	}
}
