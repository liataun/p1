<?php include 'helpers.php'; ?>
<?php require 'logic.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brian's Project 1</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div>
		<h1 class="content" id="name">Brian</h1>
		<p class="content">Who am I? Let's wait to copy paste.</p>
		<img src='/images/image.PNG' alt='Placeholder'>
		<p class="content" id="quote"><?=$quote?></p>
	</div>
	<div class="extra">
		<?php dump($quote); ?>
	</div>
</body>
</html>