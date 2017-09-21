<!DOCTYPE html>
	<html>
	<head>
		<title>Lingshan Jiang</title>
	</head>
	<style>
		body{
			width: 60%;
			margin:auto;
		}
		.text-center{
			text-align:center;
		}

		img{
			width:400px;
		}

	</style>
	<body class="text-center">
		<h1>My Favorite Comic Character</h1>
		<h3>
			Hanamichi Sakuragi
			<small><i> -- Slam Dunk<i></small>
		</h3>
		<img src="Hanamichi-Sakuragi.jpg">
		<br>
		<h2> About Me </h2>
		<p> I have been coding in real world for 2 years. I wish to develop cool apps to help other people in the world. I choose this course because I want to study in PHP Laveral framework and explore the education experience in Harvard.</p>
		<h2>Random Quote</h2>
		<blockquote>
			
		<?php 

		 $quotes = array(
		 	"hello",
		 	"world",
		 	"this",
		 	"is",
		 );
		 $num = sizeof($quotes);
		 $randomIndex = floor(mt_rand(0,$num - 1));
		 $randomQuote = $quotes[$randomIndex];
		 echo $randomQuote;
		 ?>
		 </blockquote>
	</body>
</html>