<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Post Index Page</h1>

	<?php 
	foreach($posts as $post) {
	  echo $post->id;
	  echo "<br>";
	  echo $post->title;
	  echo "<br>";
	  echo $post->content;
	  echo "<br>";
	}

	?>
</body>
</html>