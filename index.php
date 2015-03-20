<?php

include_once('common/model/bo/ClassBo.php');
include_once('common/model/bo/ApplicationFolderBo.php');
include_once('common/model/bo/AutoLoadBo.php');

require_once('common/config.php');
require_once('common/bootstrap.php');

$requestBo            = new \Common\RequestBo();
$requestDo            = $requestBo->getRequestDo();
$routingDoFactory     = new \Common\RoutingDoFactory();
$routingBo            = new \Common\RoutingBo($routingDoFactory, $requestDo);
$routingDo            = $routingBo->getRoutingDo();
$applicationBoFactory = new \Common\ApplicationBoFactory($routingDo);
$applicationBo        = $applicationBoFactory->get($routingDo->getApplicationName());

$applicationBo->serveRequest();