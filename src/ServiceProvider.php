<?php
namespace Venturecraft\Revisionable;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider
 * @package FuquIo\LaravelCors
 */
class ServiceProvider extends BaseServiceProvider{
	CONST VENDOR_PATH = 'venturecraft/revisionable';
	CONST SHORT_NAME = 'revisionable';

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(){
		$this->loadMigrationsFrom(__DIR__ . '/../migrations');
		$this->publishes([__DIR__ . '/../config/main.php' => config_path(SELF::SHORT_NAME . '.php')]);
		$this->mergeConfigFrom(
			__DIR__ . '/../config/main.php', SELF::SHORT_NAME
		);

		$this->loadViewsFrom(__DIR__ . '/../resources/views', self::SHORT_NAME);
		$this->publishes([__DIR__ . '/../resources/views' => resource_path('views/vendor/' . self::SHORT_NAME)], 'views');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register(){

	}

}