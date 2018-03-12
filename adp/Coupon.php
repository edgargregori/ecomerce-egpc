<?php

interface Coupon
{
	public function to();
	public function product();
	public function discount();
	public function __toString();
}
