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
	$classBo             = new \Common\ClassBo();
	$applicationFolderBo = new \Common\ApplicationFolderBo();
	$autoLoadBo          = new \Common\AutoLoadBo($classBo, $applicationFolderBo);
	$autoLoadBo->load($className);
}