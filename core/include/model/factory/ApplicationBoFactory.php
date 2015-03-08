<?php

namespace Core;

/**
 * Application business object factory.
 *
 * @package    Core
 * @subpackage Factory
 */
class ApplicationBoFactory
{
	/** Application: Core. */
	const APPLICATION_CORE = 'Core';
	/** Application: Site. */
	const APPLICATION_SITE = 'Site';

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
			case strtolower(self::APPLICATION_CORE):
				return new CoreApplicationBo(
					self::APPLICATION_CORE,
					'/' . ConfigDo::$coreIncludeFolder
				);
				break;

			case strtolower(self::APPLICATION_SITE):
				return new SiteApplicationBo(
					self::APPLICATION_CORE,
					'/' . ConfigDo::$coreApplicationFolder . self::APPLICATION_SITE . '/'
				);
				break;

			default:
				throw new \Exception('Invalid application encountered: "' . $applicationName . '"');
		}
	}
}