<?php namespace Coupons;

class ExchangeCoupon extends Coupon
{
	public function calculate($codeCoupon, $productId)
    {
        return $this->Discount->calculateDiscount($codeCoupon, $productId);
    }
}
