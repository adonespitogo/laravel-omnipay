<?php 

namespace Adonesp\Omnipay;

use Illuminate\Support\ServiceProvider;

class OmnipayServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('adonesp/omnipay');
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
  		$loader->alias('Omnipay', 'Adonesp\Omnipay\Facades\Omnipay');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('omnipay', function(){
			return new Omnipay;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('omnipay');
	}

}