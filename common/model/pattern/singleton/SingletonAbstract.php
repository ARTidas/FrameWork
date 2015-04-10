<?php

namespace Common;

/**
 * Singleton abstract.
 *
 * @package Common
 * @package Singleton
 */
abstract class SingletonAbstract
{
	/**
	 * Instance container.
	 *
	 * @var array
	 */
	private static $instances = array();

	/**
	 * Construct.
	 */
	protected function __construct()
	{
	}

	/**
	 * Clone.
	 */
	private function __clone()
	{
	}

	/**
	 * WakeUp.
	 */
	private function __wakeup()
	{
	}

	/**
	 * Get object singleton instance.
	 *
	 * @return $this
	 */
	public static function getInstance()
	{
		$calledClass = get_called_class();

		return isset(self::$instances[$calledClass])
			? self::$instances[$calledClass]
			: self::$instances[$calledClass] = new $calledClass()
		;
	}
}