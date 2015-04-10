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
		$object($methodName, $this->getMethodParameters($className, $methodName));
	}

	/**
	 * Get method parameters.
	 *
	 * @param string $className    Class name.
	 * @param string $methodName   Method name.
	 *
	 * @throws \Exception   If required parameter is not set.
	 *
	 * @return array   Method parameters.
	 */
	protected function getMethodParameters($className, $methodName)
	{
		$reflectionClass = new \ReflectionClass($className);
		$reflectionMethod = $reflectionClass->getMethod($methodName);

		$parameters = array();
		foreach ($reflectionMethod->getParameters() as $reflectionParameter)
		{
			if (isset($_POST[$reflectionParameter->getName()]) && !empty($_POST[$reflectionParameter->getName()]))
			{
				$parameters[$reflectionParameter->getName()] = $_POST[$reflectionParameter->getName()];
			}
			elseif ($reflectionParameter->isDefaultValueAvailable())
			{
				$parameters[$reflectionParameter->getName()] = $reflectionParameter->getDefaultValue();
			}
			else
			{
				throw new \Exception('Parameter required: "' . $reflectionParameter->getName() . '"');
			}
		}

		return $parameters;
	}
}