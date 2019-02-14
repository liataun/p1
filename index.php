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
		<p class="content">I work heavily with databases and other oft-repeated tasks in support of production ETL websites, so I am hoping to expand my application programming skills, AI knowledge, and Web/Cloud experience.</p>
		<p class="content">I am taking this class as a blend of building my confidence, developing skills for work, and hopefully getting a Master's degree, though I haven't decided for sure if the HES Software Engineering focus is the right fit. I have a habit of long posts and over-thinking, but I love to share what I know, so feel free to ask me questions if any of my posts interest you!</p>
		<img src='/images/photo.jpg' alt='At Middlesex Fells'>
		<p class="content" id="quote"><?=$quote?></p>
	</div>
	<div class="extra">
		<?php dump($quote); ?>
	</div>
</body>
</html>