<?php namespace Discounts;

class ByProduct implements Discount
{
	public function calculateDiscount($codeCoupon, $productId)
	{
		echo 'Discount by producto: '. $codeCoupon, $productId . '20 $Us.' . PHP_EOL;
	}
}
