<?php

namespace Common;

/**
 * Application business object abstract.
 *
 * @package    Common
 * @subpackage Bo
 */
abstract class ApplicationBoAbstract
{
	/**
	 * Application routing data object.
	 *
	 * @var RoutingDoAbstract
	 */
	protected $routingDo;

	/**
	 * Construct.
	 *
	 * @param RoutingDoAbstract  $routingDo   Application routing data object abstract.
	 */
	public function __construct(RoutingDoAbstract $routingDo)
	{
		$this->routingDo = $routingDo;
	}

	/**
	 * Serve request with application.
	 *
	 * @return void
	 */
	public function serveRequest()
	{
		$className  = $this->routingDo->getApplicationName() . '\\'  . $this->routingDo->getClassName();
		$methodName = $this->routingDo->getMethodName();

		$object = new $className();
		$object->$methodName();
	}
}