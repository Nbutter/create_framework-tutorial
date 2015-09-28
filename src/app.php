<?php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

function is_leap_year($year = null) {
	if (null === $year) {
		$year = date('Y');
	}

	return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
}

$routes = new Routing\RouteCollection();

$routes->add('leap_year', new Routing\Route("/is_leap_year/{year}", array(
	'year'=> null,
	'_controller' => function ($request) {
		if (is_leap_year($request->attributes->get('year'))) {
			return new Response('Yep, this is a leap year!');
		}

		return new Response('Nope, this is not a leap year.');
	})));

$routes->add('hello', new Routing\Route('/hello/{name}', array(
	'name' => 'World',
	'_controller' => function($request){
		$request->attributes->set('foo', 'bar');
		return render_template($request);
	})));


$routes->add('bye', new Routing\Route('/bye', array(
	'_controller' => function($request){
		return render_template($request);
	})));

$routes->add('polo', new Routing\Route('/marco', array(
	'_controller' => function($request){
		return render_template($request);
	})));


return $routes;
