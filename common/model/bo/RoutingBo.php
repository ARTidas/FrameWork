<?php

namespace Common;

/**
 * Routing business object.
 *
 * @package    Common
 * @subpackage Bo
 */
class RoutingBo
{
	/**
	 * Routing data object factory.
	 *
	 * @var RoutingDoFactory
	 */
	protected $routingDoFactory;

	/**
	 * Request data object.
	 *
	 * @var RequestDo
	 */
	protected $requestDo;

	/**
	 * Routing data object.
	 *
	 * @var RoutingDoAbstract
	 */
	protected $routingDo;

	/**
	 * Construct.
	 *
	 * @param RoutingDoFactory $routingDoFactory   Routing data object factory.
	 * @param RequestDo        $requestDo          Request data object.
	 */
	public function __construct(RoutingDoFactory $routingDoFactory, RequestDo $requestDo)
	{
		$this->routingDoFactory = $routingDoFactory;
		$this->requestDo        = $requestDo;
		$this->routingDo        = $this->routingDoFactory->get($this->requestDo->getApplicationName());

		$this->loadRoutingDoAttributes();
	}

	/**
	 * Load routing data object attributes.
	 *
	 * @throws \Exception   If no routing set for request.
	 *
	 * @return void
	 */
	protected function loadRoutingDoAttributes()
	{
		if (!isset($this->routingDo->getRouting()[$this->requestDo->getRoute()]))
		{
			throw new \Exception('Could not find routing for request: "' . $this->requestDo->getRoute() . '"');
		}


		$this->loadRouteFromRequest();
		$this->loadApplicationToCall();
		$this->loadClassToCall();
		$this->loadMethodToCall();
	}

	/**
	 * Load route which serves request.
	 *
	 * @return void
	 */
	protected function loadRouteFromRequest()
	{
		$this->routingDo->setRoute($this->routingDo->getRouting()[$this->requestDo->getRoute()]);
	}

	/**
	 * Load application to call.
	 *
	 * @return void
	 */
	protected function loadApplicationToCall()
	{
		$this->routingDo->setApplicationName($this->requestDo->getApplicationName());
	}

	/**
	 * Load method to call on request.
	 *
	 * @return void
	 */
	protected function loadClassToCall()
	{
		$this->routingDo->setClassName(explode('/', $this->routingDo->getRoute())[0]);
	}

	/**
	 * Load method to call on request.
	 *
	 * @return void
	 */
	protected function loadMethodToCall()
	{
		$this->routingDo->setMethodName(explode('/', $this->routingDo->getRoute())[1]);
	}

	/**
	 * Get routing data object abstract.
	 *
	 * @return RoutingDoAbstract   Routing data object abstract.
	 */
	public function getRoutingDo()
	{
		return $this->routingDo;
	}
}