<?php

require_once('common/config.php');
require_once('common/autoload.php');
require_once('common/log.php');

\Common\ConfigDo::getInstance()->setRootPath(dirname(__FILE__));

$applicationBoBuilder = new \Common\ApplicationBoBuilder();
$applicationBo        = $applicationBoBuilder->build();
$applicationBo->serveRequest();