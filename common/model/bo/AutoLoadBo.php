<?php

namespace Common;

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
	 * Application business object factory.
	 *
	 * @var ApplicationBoFactory
	 */
	protected $applicationBoFactory;

	/**
	 * Construct.
	 *
	 * @param ClassBo              $classBo                Class business object.
	 * @param ApplicationBoFactory $applicationBoFactory   Application business object.
	 */
	public function __construct(ClassBo $classBo, ApplicationBoFactory $applicationBoFactory)
	{
		$this->classBo              = $classBo;
		$this->applicationBoFactory = $applicationBoFactory;
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
		$applicationBo   = $this->applicationBoFactory->get($classNamespace);
		$classRoute      = $applicationBo->getApplicationFolder()
			. '/'
			. $this->classBo->getClassRoutePartByType($classType)
			. '/'
			. strtolower($className)
			. '.php'
		;

		include_once($classRoute);
	}
}