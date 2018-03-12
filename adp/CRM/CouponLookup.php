<?php namespace CRM;

class CouponLookup
{
	public function find($number)
	{
		// this would be a lot more complicated but we are just hardcoding
		// an address to return here instead, so we don't loose focus on
		// the adapter pattern with lots of details
		return new Coupon('Olive oil', '10');
	}
}
