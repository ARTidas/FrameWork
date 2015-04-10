<?php

namespace Common;

/**
 * Application business object builder.
 *
 * @package    Common
 * @subpackage Builder
 */
class ApplicationBoBuilder
{
	/**
	 * Build.
	 *
	 * @return ApplicationBoAbstract
	 */
	public function build()
	{
		$requestBo            = new RequestBo();
		$requestDo            = $requestBo->getRequestDo();
		$routingDoFactory     = new RoutingDoFactory();
		$routingBo            = new RoutingBo($routingDoFactory, $requestDo);
		$routingDo            = $routingBo->getRoutingDo();
		$applicationBoFactory = new ApplicationBoFactory($routingDo);

		return $applicationBoFactory->get($routingDo->getApplicationName());
	}
}