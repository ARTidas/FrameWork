<?php

namespace Common;

/**
 * Class automatic loader business object.
 *
 * @package    Common
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
	 * Application folder business object.
	 *
	 * @var ApplicationFolderBo
	 */
	protected $applicationFolderBo;

	/**
	 * Construct.
	 *
	 * @param ClassBo             $classBo               Class business object.
	 * @param ApplicationFolderBo $applicationFolderBo   Application folder business object.
	 */
	public function __construct(ClassBo $classBo, ApplicationFolderBo $applicationFolderBo)
	{
		$this->classBo             = $classBo;
		$this->applicationFolderBo = $applicationFolderBo;
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
		$classRoute      = $this->applicationFolderBo->get($classNamespace)
			. '/'
			. $this->classBo->getClassRoutePartByType($classType)
			. '/'
			. $className
			. '.php'
		;

		include_once($classRoute);
	}
}