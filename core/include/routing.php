<?php
/**
 * Routing.
 */

$routes = array(
	'/' => 'IndexController/displayDocumentation',
);

$applicationBoFactory = new \Core\ApplicationBoFactory();
$routingBo            = new \Core\RoutingBo($routes);
$routingDo            = $routingBo->getRoutingDo();

$application = $routingDo->getApplication();
$class       = $routingDo->getClass();
$method      = $routingDo->getMethod();

$class  = $application . '\\'  . $class;
$object = new $class();
$object->$method();

