<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();


$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
$routes->add('bye', new Routing\Route('/bye'));
$routes->add('polo', new Routing\Route('/marco'));
//$routes->add('polo', new Routing\Route('/polo'));
//$routes->add('polo', new Routing\Route('/sport-of-kings'));

return $routes;
