<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$presenterTable = [
			'uzivatele' => 'Users',
		];

		$router = new RouteList;
		$router->addRoute('front/<presenter=Homepage>[/<action=default>]', array(
			'module' => 'Front',
			
		));
		$router->addRoute('<presenter>/<action>', 'Homepage:default');
		return $router;
	}
}
