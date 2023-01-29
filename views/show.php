<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Post Show Page</h1>
	
	<?php 
	echo $post->id;
	?>

	<br>

	<?php 
	echo $post->title;
	?>

	<br>

	<?php 
	echo $post->content;
	?>

</body>
</html>