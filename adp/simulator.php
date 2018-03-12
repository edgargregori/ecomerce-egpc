<?php

include __DIR__ . '/../vendor/autoload.php';

// vendor Coupon
$crmCoupon = with(new CRM\CouponLookup)->find('555-867-5309');

// adapter for vendor Coupon
$Coupon = new CRMCouponAdapter('Chirstmas', $crmCoupon);

// our application code
$mailClient = new MailClient;

// the client expects an Coupon interface, not CRM\Address interface
$mailClient->sendLetter($Coupon, 'Hello there, this is the body of the letter');
