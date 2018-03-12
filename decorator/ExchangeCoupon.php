<?php

class ExchangeCoupon extends ModifiedCoupon
{
	public function validateCoupon()
	{
		return parent::validate();
	}

	public function exchange()
	{
		return "!Valid & exchanged coupon";
	}

}
