<?php

namespace Core;

/**
 * Class business object.
 *
 * @package    Core
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
	/** Type: Factory. */
	const TYPE_FACTORY    = 'Factory';
	/** Type: Abstract. */
	const TYPE_ABSTRACT   = 'Abstract';

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
		self::TYPE_FACTORY,
		self::TYPE_ABSTRACT,
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
			$classTypeStartInString = $matches[count($matches) - 2][1];
			$classType              = substr($className, 0 - (strlen($className) - $classTypeStartInString));
		}

		if (!$this->isTypeValid($classType))
		{
			throw new \Exception('Invalid class type encountered: "' . $classType . '"');
		}

		return $classType;
	}

	/**
	 * Check if class type is valid.
	 *
	 * @param string $classType   Class type to check.
	 *
	 * @return bool   True if valid, false otherwise.
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
				return ConfigDo::$classFolderController;
				break;

			case self::TYPE_BO:
				return ConfigDo::$classFolderBo;
				break;

			case self::TYPE_DO:
				return ConfigDo::$classFolderDo;
				break;

			case self::TYPE_FACTORY:
				return ConfigDo::$classFolderFactory;
				break;

			default:
				throw new \Exception('Invalid class type encountered: "' . $classType . '"');
		}
	}
}