<?php
/**
 * Routing.
 */

$routes = array(
	'/' => 'IndexController/displayDocumentation',
);

$applicationBoFactory = new \Common\ApplicationBoFactory();
$routingBo            = new \Common\RoutingBo($routes);
$routingDo            = $routingBo->getRoutingDo();

$application = $routingDo->getApplication();
$class       = $routingDo->getClass();
$method      = $routingDo->getMethod();

$applicationBo = $applicationBoFactory->get($application);

$class  = $applicationBo->getApplicationName() . '\\'  . $class;

$object = new $class();
$object->$method();