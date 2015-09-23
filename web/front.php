<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = array(
	'/hello' => dirname(__DIR__). '/src/pages/hello.php',
	'/bye' => dirname(__DIR__) . '/src/pages/bye.php',
	);

$path = $request->getPathInfo(); // this is where the magic happens
if (isset($map[$path])) {
	require $map[$path];  
} else {
	$response->setStatusCode(404);
	$response->setContent('Not Found');
}

$response->send();