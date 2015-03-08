<?php

namespace Core;

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
	 * Construct.
	 *
	 * @param array $routes   Request routes.
	 */
	public function __construct(array $routes)
	{
		$this->routes = $routes;
	}

	/**
	 * Get action to call on request.
	 */
	public function getActionToCall()
	{

	}
}