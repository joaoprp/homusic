<?php namespace Drparham\Reservations;

use Illuminate\Support\ServiceProvider;

class ReservationsServiceProvider extends ServiceProvider {

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
		$this->package('drparham/reservations');

		include __DIR__.'/../../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	  	$this->app['reservations'] = $this->app->share(function($app)
		{
			return new Reservations;
		});

	  	$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('Reservations', 'Drparham\Reservations\Facades\Reservations');
		});
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
