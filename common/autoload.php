<?php
/**
 * Autoload.
 */

include_once('model/bo/ClassBo.php');
include_once('model/bo/ApplicationFolderBo.php');
include_once('model/bo/AutoLoadBo.php');

/**
 * Autoload.
 *
 * @param string $className   Class name to load.
 *
 * @return void
 */
function __autoload($className)
{
	$classBo             = new \Common\ClassBo();
	$applicationFolderBo = new \Common\ApplicationFolderBo();
	$autoLoadBo          = new \Common\AutoLoadBo($classBo, $applicationFolderBo);

	$autoLoadBo->load($className);
}