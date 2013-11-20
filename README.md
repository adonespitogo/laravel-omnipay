laravel-omnipay
===============
<a href="https://github.com/omnipay/omnipay">Omnipay</a> Package for Laravel Four.

<qoute>Omnipay is a payment processing library for PHP. It has been designed based on ideas from Active Merchant, plus experience implementing dozens of gateways for CI Merchant. It has a clear and consistent API, is fully unit tested, and even comes with an example application to get you started.</qoute>

<h2>Installation</h2>
Begin by installing this package through Composer. Edit your project's composer.json file to require codesleeve/asset-pipeline.

It might look something like:

```

"require": {
	"laravel/framework": "4.0.*",
	"adonesp/omnipay" : "dev-master"
}

```

Next, update Composer from the Terminal:


```
composer update
```

Once this operation completes, add the service provider. Open app/config/app.php, and add a new item to the providers array.


```
'Adonesp\Omnipay\OmnipayServiceProvider'
```

See <a href="https://github.com/omnipay/omnipay">Omnipay</a> source for the complete documentation.