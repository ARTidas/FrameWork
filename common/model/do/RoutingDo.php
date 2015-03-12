<?php

namespace Common;

/**
 * Routing data object.
 *
 * @package    Core
 * @subpackage Do
 */
class RoutingDo
{
	/**
	 * The class name for serving the request.
	 *
	 * @var string
	 */
	protected $class;

	/**
	 * The method name for serving the request.
	 *
	 * @var string
	 */
	protected $method;

	/**
	 * The application name for serving the request.
	 *
	 * @var string
	 */
	protected $application;

	/**
	 * Get class name for serving the request.
	 *
	 * @return string   Class name for serving the request.
	 */
	public function getClass()
	{
		return $this->class;
	}

	/**
	 * Set class name for serving the request.
	 *
	 * @param string $class   Class name for serving the request.
	 *
	 * @return $this
	 */
	public function setClass($class)
	{
		$this->class = (string)$class;

		return $this;
	}

	/**
	 * Get method name for serving the request.
	 *
	 * @return string   Method name for serving the request.
	 */
	public function getMethod()
	{
		return $this->method;
	}

	/**
	 * Set method name for serving the request.
	 *
	 * @param string $method   Method name for serving the request.
	 *
	 * @return $this
	 */
	public function setMethod($method)
	{
		$this->method = (string)$method;

		return $this;
	}

	/**
	 * Get application name for serving the request.
	 *
	 * @return string
	 */
	public function getApplication()
	{
		return $this->application;
	}

	/**
	 * Set application name for serving the request.
	 *
	 * @param string $application   Application name for serving the request.
	 *
	 * @return $this
	 */
	public function setApplication($application)
	{
		$this->application = $application;

		return $this;
	}
}