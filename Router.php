<?php

namespace app;

class Router
{

	public array $getRoutes = [];
	public array $postRoutes = [];

	public function get($url, $fn) 
	{
	  $this->getRoutes[$url] = $fn;
	}

	public function post($url, $fn) 
	{
		$this->postRoutes[$url] = $fn;
	}

	public function resolve() 
	{

		$currentUrl = $_SERVER['PATH_INFO'] ?? '/';
		$http_method = $_SERVER['REQUEST_METHOD'];

		if ($http_method == 'GET') {
			$fn = $this->getRoutes[$currentUrl] ?? null;
		} else {
			$fn = $this->postRoutes[$currentUrl] ?? null;
		}

		if($fn) {
			// Execute the function
			call_user_func($fn, $this);
		} else {
			echo 'Page Not Found';
 		}		

	}

	public function renderView($viewPath, $params = []) 
	{	
		// This will pass param data in views
		foreach ($params as $key => $value) {
			$$key = $value;
		}

	   // Render views
	   include_once __DIR__.'/views/'.$viewPath.'.php';
	}
}
