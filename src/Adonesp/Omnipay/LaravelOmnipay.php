<?php

namespace Adonesp\Omnipay;

use Omnipay\PayPal\ExpressGateway;

require __DIR__.'/../../../vendor/autoload.php';

class LaravelOmnipay extends ExpressGateway{

	public static function greeting()
	{
		return "hello";
	}
}