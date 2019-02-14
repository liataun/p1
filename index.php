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
		<img src='/images/Photo.jpg' alt='At Middlesex Fells'>
		<h1 id="name">Brian</h1>
	</div>
	<div class="content">
		<h2>I work heavily with databases and other oft-repeated tasks in support of production ETL websites, so I am hoping to expand my application programming skills, AI knowledge, and Web/Cloud experience.</h2>
		<h3>I am taking this class as a blend of building my confidence, developing skills for work, and starting a Master's degree, though I haven't decided for sure if the HES Software Engineering focus is the right fit. I have a habit of long posts and over-thinking, but I love to share what I know, so feel free to ask me questions if any of my posts interest you!</h3>
		<h4>Apologies for the terrible Graphic Design of this site page. It has been a while since I was last able to play with the full content of a page, so still reminding myself what works and what does not.</h4>
	</div>
	<p><span id="quote"><?=$quote?></span></p>
	<p>&mdash;<span id="author"><?=$author?></span></p>
</body>
</html>