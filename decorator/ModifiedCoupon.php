<?php

abstract class ModifiedCoupon extends Coupon
{
	protected $coupon;

	public function __construct(Coupon $coupon) { $this->coupon = $coupon; }

    public function validate() 
    { 
        return $this->coupon->validate(); 
    }

}
