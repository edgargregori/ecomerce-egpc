<?php

class CRMCouponAdapter implements Coupon
{
	protected $to, $Coupon;

	public function __construct($nameCoupon, CRM\Coupon $Coupon)
	{
        $this->Coupon = $Coupon;
		$this->to = $nameCoupon;
	}

	public function to()
	{
		return $this->to;
	}

	public function product()
	{
	    return $Coupon->getProductCoupon();
	}

	public function discount()
	{
	    return $Coupon->getDiscountCoupon();
	}

	public function __toString()
	{
		return PHP_EOL . 'Coupon name:' . $this->to . PHP_EOL . 'Details:  '.  $this->Coupon->getDetailsCoupon();
	}
}
