<?php

namespace Common;

/**
 * Class business object.
 *
 * @package    Common
 * @subpackage Bo
 */
class ClassBo
{
	/** Type: Controller. */
	const TYPE_CONTROLLER = 'Controller';
	/** Type: Bo. */
	const TYPE_BO         = 'Bo';
	/** Type: Do. */
	const TYPE_DO         = 'Do';
	/** Type: Dao. */
	const TYPE_DAO        = 'Dao';
	/** Type: View. */
	const TYPE_VIEW       = 'View';
	/** Type: Helper. */
	const TYPE_HELPER     = 'Helper';
	/** Type: Layout. */
	const TYPE_LAYOUT     = 'Layout';
	/** Type: Factory. */
	const TYPE_FACTORY    = 'Factory';
	/** Type: Singleton. */
	const TYPE_SINGLETON  = 'Singleton';
	/** Type: Builder. */
	const TYPE_BUILDER    = 'Builder';
	/** Type: Abstract. */
	const TYPE_ABSTRACT   = 'Abstract';
	/** Type: DataStructure - Ds. */
	const TYPE_DS         = 'Ds';
	/** Type: Log. */
	const TYPE_LOG        = 'Log';

	/**
	 * Valid class types.
	 *
	 * @var array
	 */
	protected $classTypes = array(
		self::TYPE_CONTROLLER,
		self::TYPE_BO,
		self::TYPE_DO,
		self::TYPE_DAO,
		self::TYPE_VIEW,
		self::TYPE_HELPER,
		self::TYPE_LAYOUT,
		self::TYPE_FACTORY,
		self::TYPE_SINGLETON,
		self::TYPE_BUILDER,
		self::TYPE_ABSTRACT,
		self::TYPE_DS,
		self::TYPE_LOG,
	);

	/**
	 * Get class type by class name.
	 *
	 * @param string $className   Class name.
	 *
	 * @throws \Exception   If invalid class type encountered.
	 *
	 * @return string   Class type.
	 */
	public function getType($className)
	{
		preg_match_all('/[A-Z]/', $className, $matches, PREG_OFFSET_CAPTURE);

		$classTypeStartInString = end($matches[0])[1];
		$classType              = substr($className, 0 - (strlen($className) - $classTypeStartInString));

		if ($classType === self::TYPE_ABSTRACT)
		{
			$classTypeStartInString = $matches[0][count($matches[0]) - 2][1];
			$classTypeEndInString   = end($matches[0])[1];
			$classTypeLength        = $classTypeEndInString - $classTypeStartInString;
			$classType              = substr(
				$className, 0 - (strlen($className) - $classTypeStartInString), $classTypeLength
			);
		}

		if (!$this->isTypeValid($classType))
		{
			throw new \Exception(
				'Invalid class type encountered: "' . $classType . '" from input parameter: "' . $className . '"'
			);
		}

		return $classType;
	}

	/**
	 * Check if class type is valid.
	 *
	 * @param string $classType   Class type to check.
	 *
	 * @return boolean   True if valid, false otherwise.
	 */
	protected function isTypeValid($classType)
	{
		return in_array($classType, $this->classTypes);
	}

	/**
	 * Get class route part by class type.
	 *
	 * @param string $classType   Class type.
	 *
	 * @throws \Exception   If invalid class type encountered.
	 *
	 * @return string   Class route part.
	 */
	public function getClassRoutePartByType($classType)
	{
		switch ($classType)
		{
			case self::TYPE_CONTROLLER:
				return ConfigDo::getInstance()->getClassFolderController();
				break;

			case self::TYPE_BO:
				return  ConfigDo::getInstance()->getClassFolderBo();
				break;

			case self::TYPE_DO:
				return  ConfigDo::getInstance()->getClassFolderDo();
				break;

			case self::TYPE_DS:
				return  ConfigDo::getInstance()->getClassFolderDs();
				break;

			case self::TYPE_DAO:
				return  ConfigDo::getInstance()->getClassFolderDao();
				break;

			case self::TYPE_FACTORY:
				return  ConfigDo::getInstance()->getClassFolderFactory();
				break;

			case self::TYPE_SINGLETON:
				return  ConfigDo::getInstance()->getClassFolderSingleton();
				break;

			case self::TYPE_BUILDER:
				return  ConfigDo::getInstance()->getClassFolderBuilder();
				break;

			case self::TYPE_VIEW:
				return  ConfigDo::getInstance()->getClassFolderView();
				break;

			case self::TYPE_HELPER:
				return  ConfigDo::getInstance()->getClassFolderHelper();
				break;

			case self::TYPE_LAYOUT:
				return  ConfigDo::getInstance()->getClassFolderLayout();
				break;

			default:
				throw new \Exception('Invalid class type encountered: "' . $classType . '"');
		}
	}
}