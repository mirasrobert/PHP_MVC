<?php

namespace app\controllers;

use app\models\Post;
use app\Router;

class PostController
{
	public function index(Router $router) 
	{
	  $posts = Post::all();
	  return $router->renderView('index', [
		'posts' => $posts
	  ]);

	}

	public function show(Router $router) 
	{

	  $id = $_GET['id'];	

	  $post = Post::findOne($id);
	  return $router->renderView('show', [
		'post' => $post
	  ]);

	}
}

