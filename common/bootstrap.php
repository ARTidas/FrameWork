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
	$classBo              = new \Common\ClassBo();
	$applicationBoFactory = new \Common\ApplicationBoFactory();
	$autoLoadBo           = new \Common\AutoLoadBo($classBo, $applicationBoFactory);

	$autoLoadBo->load($className);
}