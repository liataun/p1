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
	<div class="content">
		<h1 id="name">Brian</h1>
		<p id="quote"><?=$quote?></p>
	</div>
	<div class="extra">
		<?php dump($quote); ?>
	</div>
</body>
</html>