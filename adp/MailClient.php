<?php

class MailClient
{
	public function sendLetter(Coupon $coupon, $letterBody)
	{
        $mail = 'soylaVacadelMonte@gmail.com';
		// api to send this letter
		print "Sending detail coupon" . $coupon . " letter, with details to "  . $mail . PHP_EOL ;
	}

}
