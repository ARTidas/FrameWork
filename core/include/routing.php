<?php
/**
 * Routing.
 */

$routes = array(
	'/' => 'IndexController/getDocumentation',
);
$routingBo = new \Core\RoutingBo($routes);
var_dump($routingBo->getActionToCall());

$request         = empty($_REQUEST['request']) ? '/' : $_REQUEST['request'];
$requestFolders  = explode('/', $request);
$applicationName = empty($requestFolders[0]) ? \Core\ApplicationBoFactory::APPLICATION_CORE : $requestFolders[0];
array_shift($requestFolders);
$route           = implode('/', $requestFolders);



$applicationBoFactory = new \Core\ApplicationBoFactory();
$applicationBo        = $applicationBoFactory->get($applicationName);


$controller = $applicationBo;

var_dump($applicationBo);

