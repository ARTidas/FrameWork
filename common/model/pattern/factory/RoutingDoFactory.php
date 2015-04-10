<?php

namespace Common;

use \Admin\RoutingDo as AdminRoutingDo;
use \User\RoutingDo as UserRoutingDo;

/**
 * Routing data object factory.
 *
 * @package    Common
 * @subpackage Factory
 */
class RoutingDoFactory
{
	/**
	 * Get routing data object by application name.
	 *
	 * @param string $applicationName   Application name.
	 *
	 * @throws \Exception   If invalid application encountered.
	 *
	 * @return RoutingDoAbstract   Routing data object.
	 */
	public function get($applicationName)
	{
		switch (strtolower($applicationName))
		{
			case strtolower(ConfigDo::APPLICATION_COMMON):
				return new RoutingDo();
				break;

			case strtolower(ConfigDo::APPLICATION_ADMIN):
				return new AdminRoutingDo();
				break;

			case strtolower(ConfigDo::APPLICATION_USER):
				return new UserRoutingDo();
				break;

			default:
				throw new \Exception('Invalid application encountered: "' . $applicationName . '"');
		}
	}
}