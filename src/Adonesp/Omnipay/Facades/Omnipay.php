<?php

namespace Adonesp\Omnipay\Facades;

use Illuminate\Support\Facades\Facade;

class Omnipay extends Facade {
	protected static function getFacadeAccessor() { return 'omnipay'; }
 
}