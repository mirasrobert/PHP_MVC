<?php

namespace app\models;

use app\Database;

class Post 
{
  // Model Class
  public static function all() {

	$db = new Database();

	$sql = 'SELECT * FROM posts';
	$db->query($sql);
	$db->execute();
	$posts = $db->resultset();

	return $posts;
  }

  public static function findOne($id) {

	$db = new Database();

	$sql = 'SELECT * FROM posts WHERE id = :id';
	$db->query($sql);
	$db->bind(':id', $id);
	$db->execute();
	$post = $db->single();

	return $post;
  }
}
