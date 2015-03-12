<?php

namespace Common;

/**
 * Routing business object.
 *
 * @package    Core
 * @subpackage Bo
 */
class RoutingBo
{
	/**
	 * Request routes.
	 *
	 * @var array
	 */
	protected $routes;

	/**
	 * Request.
	 *
	 * @var string
	 */
	protected $request;

	/**
	 * Route to serve the request.
	 *
	 * @var string
	 */
	protected $route;

	/**
	 * Routing data object.
	 *
	 * @var RoutingDo
	 */
	protected $routingDo;

	/**
	 * Construct.
	 *
	 * @param array $routes   Request routes.
	 */
	public function __construct(array $routes)
	{
		$this->routes    = $routes;
		$this->request   = empty($_REQUEST['request']) ? '/' : $_REQUEST['request'];
		$this->routingDo = new RoutingDo();
	}

	/**
	 * Get routing data object.
	 *
	 * @return RoutingDo   Routing data object.
	 */
	public function getRoutingDo()
	{
		$this->loadRoute();

		return $this->routingDo;
	}

	/**
	 * Load route for request.
	 *
	 * @throws \Exception   If route does not set for request.
	 *
	 * return void
	 */
	protected function loadRoute()
	{
		$requestFolders = explode('/', $this->request);
		array_shift($requestFolders);
		$route          = implode('/', $requestFolders);
		$route          = $route === '' ? '/' : $route;

		if (!isset($this->routes[$route]))
		{
			throw new \Exception('Route does not exits: "' . $route . '"');
		}

		$this->route = $this->routes[$route];

		$this->loadApplicationToCall();
		$this->loadClassToCall();
		$this->loadMethodToCall();
	}

	/**
	 * Load application to call on request.
	 *
	 * @return void
	 */
	protected function loadApplicationToCall()
	{
		$requestFolders  = explode('/', $this->request);
		$applicationName = empty($requestFolders[0]) ? ApplicationBoFactory::APPLICATION_COMMON : $requestFolders[0];

		$this->routingDo->setApplication($applicationName);
	}

	/**
	 * Load method to call on request.
	 *
	 * @return void
	 */
	protected function loadClassToCall()
	{
		$this->routingDo->setClass(explode('/', $this->route)[0]);
	}

	/**
	 * Load method to call on request.
	 *
	 * @return void
	 */
	protected function loadMethodToCall()
	{
		$this->routingDo->setMethod(explode('/', $this->route)[1]);
	}
}