<?php

namespace Common;

/**
 * Url helper.
 *
 * @package    Common
 * @subpackage Helper
 */
class UrlHelper extends SingletonAbstract
{
	/**
	 * Get url by route identifier.
	 *
	 * @param string $route       Route identifier.
	 * @param string $namespace   Namespace
	 *
	 * @return string   Url for route identifier.
	 */
	public function getUrl($route, $namespace = ConfigDo::APPLICATION_COMMON)
	{
		$routingDo = $this->getRoutingDoClass($namespace);

		return $routingDo->getUrl($route, $namespace);
	}

	/**
	 * Get routing data object class instance by namespace.
	 *
	 * @param string $namespace   Namespace of the routing data object class.
	 *
	 * @return RoutingDoAbstract   Routing data object abstract.
	 */
	protected function getRoutingDoClass($namespace)
	{
		$className = $namespace . '\\RoutingDo';

		return new $className;
	}
}