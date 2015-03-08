<?php

namespace Core;

/**
 * Class automatic loader business object.
 *
 * @package    Core
 * @subpackage Bo
 */
class AutoLoadBo
{
	/**
	 * Class business object.
	 *
	 * @var ClassBo
	 */
	protected $classBo;

	/**
	 * Application business object.
	 *
	 * @var ApplicationBoAbstract
	 */
	protected $applicationBo;

	/**
	 * Construct.
	 *
	 * @param ClassBo               $classBo         Class business object.
	 * @param ApplicationBoAbstract $applicationBo   Application business object.
	 */
	public function __construct(ClassBo $classBo, ApplicationBoAbstract $applicationBo)
	{
		$this->classBo       = $classBo;
		$this->applicationBo = $applicationBo;
	}

	/**
	 * Load a class by name.
	 *
	 * @throws \Exception   If invalid namespace encountered.
	 *
	 * @param string $className   Class name to load.
	 *
	 * @return void
	 */
	public function load($className)
	{
		$classAttributes = explode('\\', $className);
		$classNamespace  = $classAttributes[0];
		$className       = $classAttributes[1];
		$classType       = $this->classBo->getType($className);

		$classRoute = $this->applicationBo->getApplicationFolder($classNamespace)
			. '/'
			. $this->classBo->getClassRoutePartByType($classType)
			. '/'
			. $className
			. '.php'
		;

		include_once($classRoute);
	}
}