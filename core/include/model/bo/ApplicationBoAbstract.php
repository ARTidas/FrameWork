<?php

namespace Core;

/**
 * Application business object abstract.
 *
 * @package    Core
 * @subpackage Bo
 */
abstract class ApplicationBoAbstract
{
	/**
	 * Application name.
	 *
	 * @var string
	 */
	protected $applicationName;

	/**
	 * Application folder.
	 *
	 * @var string
	 */
	protected $applicationFolder;

	/**
	 * Construct.
	 *
	 * @param string $applicationName     Application name.
	 * @param string $applicationFolder   Application folder.
	 */
	public function __construct($applicationName, $applicationFolder)
	{
		$this->applicationName   = $applicationName;
		$this->applicationFolder = $applicationFolder;
	}

	/**
	 * Get application Name.
	 *
	 * @return string   Application name.
	 */
	public function getApplicationName()
	{
		return $this->applicationName;
	}

	/**
	 * Get application folder.
	 *
	 * @return string   Application folder.
	 */
	public function getApplicationFolder()
	{
		return $this->applicationFolder;
	}
}