<?php namespace Coupons;

use Discounts\Discount;

class Coupon
{
	protected $Discount;

	public function __construct(Discount $Discount)
	{
		$this->Discount = $Discount;
	}
	public function calculate($codeCoupon, $productId)
	{
        $validate = $this->exchangeCoupon($codeCoupon, $productId);

		$this->Discount->calculateDiscount($codeCoupon, $productId);

	}
	public function exchangeCoupon($codeCoupon, $productId)
	{
        echo "Valid & exchanged coupon." . PHP_EOL;

	}

}
