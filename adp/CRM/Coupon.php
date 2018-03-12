<?php namespace CRM;

class Coupon
{
	private $productCoupon, $discountCoupon;

	public function __construct($productCoupon, $discountCoupon)
	{
		$this->productCoupon = $productCoupon;
		$this->discountCoupon = $discountCoupon;
	}

	public function getDetailsCoupon()
	{
		return 'Code: ' . $this->productCoupon 
			.  ', % discount: ' . $this->discountCoupon . PHP_EOL; 
	}


	public function getProductCoupon()
	{
		return $this->productCoupon;
	}

	public function getDiscountCoupon()
	{
		return $this->discountCoupon;
	}

	public function setProductCoupon($productCoupon)
	{
		$this->productCoupon = $productCoupon;
	}

	public function setDiscountCoupon($discountCoupon)
	{
		$this->discountCoupon =  $discountCoupon;
	}

}
