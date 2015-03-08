<?php
/**
 * Bootstrap.
 */

/**
 * Autoload.
 *
 * @param string $className   Class name to load.
 */
function __autoload($className)
{
	$classBo              = new \Core\ClassBo();
	$applicationBoFactory = new \Core\ApplicationBoFactory();
	$applicationBo        = $applicationBoFactory->get(\Core\ApplicationBoFactory::APPLICATION_CORE);
	$autoLoadBo           = new \Core\AutoLoadBo($classBo, $applicationBo);

	$autoLoadBo->load($className);
}