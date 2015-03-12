<?php

namespace Common;

use \Site\ApplicationBo as SiteApplicationBo;

/**
 * Application business object factory.
 *
 * @package    Core
 * @subpackage Factory
 */
class ApplicationBoFactory
{
	/** Application: Core. */
	const APPLICATION_COMMON = 'Common';
	/** Application: Site. */
	const APPLICATION_SITE   = 'Site';

	/**
	 * Get application business object by name.
	 *
	 * @param string $applicationName   Application name.
	 *
	 * @throws \Exception   If invalid application encountered.
	 *
	 * @return ApplicationBoAbstract   Application business object.
	 */
	public function get($applicationName)
	{
		switch (strtolower($applicationName))
		{
			case strtolower(self::APPLICATION_COMMON):
				return new ApplicationBo(
					self::APPLICATION_COMMON,
					'/' . ConfigDo::$coreIncludeFolder
				);
				break;

			case strtolower(self::APPLICATION_SITE):
				return new SiteApplicationBo(
					self::APPLICATION_SITE,
					'/' . ConfigDo::$coreApplicationFolder . '/' . strtolower(self::APPLICATION_SITE)
				);
				break;

			default:
				throw new \Exception('Invalid application encountered: "' . $applicationName . '"');
		}
	}
}