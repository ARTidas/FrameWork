<?php
/**
 * Config.
 */

include_once('model/do/ConfigDo.php');

Common\ConfigDo::$commonFolder          = 'common';
Common\ConfigDo::$applicationFolder     = 'application';
Common\ConfigDo::$classFolderBo         = 'model/bo';
Common\ConfigDo::$classFolderFactory    = 'model/factory';
Common\ConfigDo::$classFolderDo         = 'model/do';
Common\ConfigDo::$classFolderController = 'controller';
Common\ConfigDo::$classFolderView       = 'view';
Common\ConfigDo::$classFolderDao        = 'dao';
Common\ConfigDo::$publicCssFolder       = 'public/css';

Common\ConfigDo::$databases = array(
	User\UserDs::DATABASE_NAME => (new Common\DatabaseDo())
		->setName(User\UserDs::DATABASE_NAME)
		->setType(Common\ConfigDo::DATABASE_TYPE_MYSQL)
		->setHost('localhost')
		->setDatabase('user')
		->setUser('Courier')
		->setPassword('SierraMadreGrandOpening')
	,
);
