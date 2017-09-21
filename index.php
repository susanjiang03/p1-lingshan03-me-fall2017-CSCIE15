<!DOCTYPE html>
	<html>
	<head>
		<title>Lingshan Jiang</title>
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
	</head>
	<body class="text-center">
		<h1>My Favorite Comic Character</h1>
		<h3>Hanamichi Sakuragi</h3>
		<i>Slam Dunk</i>
		<div>
			<img src="Hanamichi-Sakuragi.jpg">
		</div>
		<h2> About Me </h2>
		<p> I have been coding in real world for 2 years. I wish to develop cool apps to help other people in the world. I choose this course because I want to study in PHP Laveral framework and explore the education experience in Harvard.</p>
		<h2>Random Quote</h2>
		<blockquote>
		<?php 

		 $quotes = array(
		 	"Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.<br>-- Steve Jobs",

		 	"Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma - which is living with the results of other people's thinking. Don't let the noise of others' opinions drown out your own inner voice. And most important, have the courage to follow your heart and intuition.<br>-- Steve Jobs",

			"You can't connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future. You have to trust in something - your gut, destiny, life, karma, whatever. This approach has never let me down, and it has made all the difference in my life.<br> -- Steve Jobs",

		 	"Education is the most powerful weapon which you can use to change the world.<br>-- Nelson Mandela",
		 	
		 );
		 $num = sizeof($quotes);
		 $randomIndex = floor(mt_rand(0,$num - 1));
		 $randomQuote = $quotes[$randomIndex];
		 echo $randomQuote;
		 ?>
		 </blockquote>

	</body>
</html>