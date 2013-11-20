<?php

namespace Adonesp\Omnipay;

use Omnipay\Omnipay;

// require __DIR__.'/../../../vendor/autoload.php';

class LaravelOmnipay extends Omnipay{

	public static function greeting()
	{
		return "hello";
	}

}