<?php

namespace Common;

use \Site\ApplicationBo as SiteApplicationBo;
use \User\ApplicationBo as UserApplicationBo;

/**
 * Application business object factory.
 *
 * @package    Common
 * @subpackage Factory
 */
class ApplicationBoFactory
{
	/**
	 * Routing data object.
	 *
	 * @var RoutingDoAbstract
	 */
	protected $routingDo;

	/**
	 * Construct.
	 *
	 * @param RoutingDoAbstract $routingDo   Routing data object.
	 */
	public function __construct(RoutingDoAbstract $routingDo)
	{
		$this->routingDo = $routingDo;
	}

	/**
	 * Get application business object by name.
	 *
	 * @param string $applicationName   Application name.
	 *
	 * @throws \Exception   If invalid application encountered.
	 *
	 * @return ApplicationBoAbstract   Application business object.
	 */
	public function get($applicationName)
	{
		switch (strtolower($applicationName))
		{
			case strtolower(ConfigDo::APPLICATION_COMMON):
				return new ApplicationBo(
					$this->routingDo
				);
				break;

			case strtolower(ConfigDo::APPLICATION_SITE):
				return new SiteApplicationBo(
					$this->routingDo
				);
				break;

			case strtolower(ConfigDo::APPLICATION_USER):
				return new UserApplicationBo(
					$this->routingDo
				);
				break;

			default:
				throw new \Exception('Invalid application encountered: "' . $applicationName . '"');
		}
	}
}