<?php
/**
 * Config.
 */

include_once('model/pattern/singleton/SingletonAbstract.php');
include_once('model/do/ConfigDo.php');
include_once('model/do/DatabaseDo.php');
include_once('model/pattern/factory/DatabaseHandlerBoFactory.php');

Common\ConfigDo::getInstance()
	->setRootUrl('http://' . $_SERVER['HTTP_HOST'] . str_replace('/index.php', '', $_SERVER['PHP_SELF']))
;
Common\ConfigDo::getInstance()
	->setCommonFolder('common')
	->setApplicationFolder('application')
	->setClassFolderBo('model' . DIRECTORY_SEPARATOR . 'bo')
	->setClassFolderFactory('model' . DIRECTORY_SEPARATOR . 'pattern' . DIRECTORY_SEPARATOR . 'factory')
	->setClassFolderSingleton('model' . DIRECTORY_SEPARATOR . 'pattern' . DIRECTORY_SEPARATOR . 'singleton')
	->setClassFolderBuilder('model' . DIRECTORY_SEPARATOR . 'pattern' . DIRECTORY_SEPARATOR . 'builder')
	->setClassFolderDo('model' . DIRECTORY_SEPARATOR . 'do')
	->setClassFolderDs('model' . DIRECTORY_SEPARATOR . 'ds')
	->setClassFolderDao('model' . DIRECTORY_SEPARATOR . 'dao')
	->setClassFolderController('controller')
	->setClassFolderView('view')
	->setClassFolderHelper('view' . DIRECTORY_SEPARATOR . 'helper')
	->setClassFolderLayout('view' . DIRECTORY_SEPARATOR . 'layout')
	->setPublicCssFolder(Common\ConfigDo::getInstance()->getRootUrl() . '/public/css')
	->setPublicJsFolder(Common\ConfigDo::getInstance()->getRootUrl() . '/public/js')
;

Common\ConfigDo::getInstance()->addDatabaseDo(
	(new Common\DatabaseDo())
		->setName('user')
		->setType(Common\DatabaseHandlerBoFactory::DATABASE_TYPE_MYSQL)
		->setHost('localhost')
		->setDatabase('core_user')
		->setUser('Courier')
		->setPassword('SierraMadreGrandOpening')
);
Common\ConfigDo::getInstance()->addDatabaseDo(
	(new Common\DatabaseDo())
		->setName('log')
		->setType(Common\DatabaseHandlerBoFactory::DATABASE_TYPE_SQLITE)
		->setFile('log' . DIRECTORY_SEPARATOR . 'log')
);