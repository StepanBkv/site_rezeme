<?php
ini_set('display_errors', '1');
$routes = explode('/', $_SERVER['REQUEST_URI']);
if ( !empty($routes[1]) )
{	
	$controller_name = $routes[1];
}

// получаем имя экшена
if ( !empty($routes[2]) )
{
	$action_name = $routes[2];
}
echo $action_name. " ". $controller_name;
?>