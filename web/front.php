<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals(); 
$response = new Response();

$map = array(
	'/hello' => dirname(__DIR__). '/src/pages/hello.php', // "dirname" to get to parent directory
	'/bye' => dirname(__DIR__) . '/src/pages/bye.php',
	'/marco' => dirname(__DIR__) . '/src/pages/polo.php',
	'/polo' => dirname(__DIR__) . '/src/pages/polo.php',
	'/sport-of-kings' => dirname(__DIR__) . '/src/pages/polo.php'
	);

$path = $request->getPathInfo(); // this is where the magic happens
if (isset($map[$path])) {
	ob_start();  
	include $map[$path];
	$response->setContent(ob_get_clean()); //not sure why we need to use output buffering...  
} else {
	$response->setStatusCode(404);
	$response->setContent('Not Found');
}

$response->send();