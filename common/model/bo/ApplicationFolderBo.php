<?php

namespace Common;

/**
 * Application folder business object.
 *
 * @package    Common
 * @subpackage Bo
 */
class ApplicationFolderBo
{
	/**
	 * Get application folder by application name.
	 *
	 * @param string $applicationName   Application name.
	 *
	 * @return string   Application folder.
	 */
	public function get($applicationName)
	{
		if (strtolower($applicationName) === strtolower(ConfigDo::APPLICATION_COMMON))
		{
			return '/' . ConfigDo::$commonFolder;
		}
		else
		{
			return '/' . ConfigDo::$applicationFolder . '/' . strtolower($applicationName);
		}
	}
}