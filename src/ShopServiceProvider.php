<?php
namespace Novapex\Shop;

use Illuminate\Support\ServiceProvider;

/**
 * 
 */
class ShopServiceProvider extends ServiceProvider
{
	
	public function boot(){

		$this->loadRoutesFrom(__DIR__.'/routes.php');
		$this->loadViewsFrom(__DIR__."/Views","shopviews");//shopviews folder will be created
		$this->publishes([
			__DIR__."/Views"=>resource_path("views/vendor/shopviews")
		]);

  

	}


	public function register(){



	}
}
