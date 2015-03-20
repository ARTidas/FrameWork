<?php

namespace Common;

/**
 * Abstract routing data object.
 *
 * @package    Common
 * @subpackage Do
 */
class RoutingDoAbstract
{
	/**
	 * The application name for serving the request.
	 *
	 * @var string
	 */
	protected $applicationName;

	/**
	 * The route where the request came in.
	 *
	 * @var string
	 */
	protected $route;

	/**
	 * The class name for serving the request.
	 *
	 * @var string
	 */
	protected $className;

	/**
	 * The method name for serving the request.
	 *
	 * @var string
	 */
	protected $methodName;

	/**
	 * The application routing.
	 *
	 * @var array
	 */
	protected $routing = array(
		'/' => 'IndexController/displayDocumentation'
	);

	/**
	 * Get class name for serving the request.
	 *
	 * @return string   Class name for serving the request.
	 */
	public function getClassName()
	{
		return $this->className;
	}

	/**
	 * Set class name for serving the request.
	 *
	 * @param string $className   Class name for serving the request.
	 *
	 * @return $this
	 */
	public function setClassName($className)
	{
		$this->className = (string)$className;

		return $this;
	}

	/**
	 * Get method name for serving the request.
	 *
	 * @return string   Method name for serving the request.
	 */
	public function getMethodName()
	{
		return $this->methodName;
	}

	/**
	 * Set method name for serving the request.
	 *
	 * @param string $methodName   Method name for serving the request.
	 *
	 * @return $this
	 */
	public function setMethodName($methodName)
	{
		$this->methodName = (string)$methodName;

		return $this;
	}

	/**
	 * Get application name for serving the request.
	 *
	 * @return string
	 */
	public function getApplicationName()
	{
		return $this->applicationName;
	}

	/**
	 * Set application name for serving the request.
	 *
	 * @param string $applicationName   Application name for serving the request.
	 *
	 * @return $this
	 */
	public function setApplicationName($applicationName)
	{
		$this->applicationName = $applicationName;

		return $this;
	}

	/**
	 * Get route where request came in.
	 *
	 * @return string   Route.
	 */
	public function getRoute()
	{
		return $this->route;
	}

	/**
	 * Set route where request came in.
	 *
	 * @param string $route   Route to set.
	 *
	 * @return $this
	 */
	public function setRoute($route)
	{
		$this->route = $route;

		return $this;
	}

	/**
	 * Get application routing.
	 *
	 * @return array   Application routing.
	 */
	public function getRouting()
	{
		return $this->routing;
	}
}