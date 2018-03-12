<?php namespace Discounts;

interface Discount
{
	public function calculateDiscount($codeCoupon, $productId);
}
