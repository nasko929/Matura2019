<?php 
	require("header.php");
	$current_char = mt_rand(0,sizeof($chars)-1);

?>

<div class="mainpart">
	<h2><?php echo $chars[$current_char][0]; ?> </h2>
	Творба: <p id = "showWork" class="answers"><?php $currwork = $works[$chars[$current_char][1]]; echo $currwork[0]; ?></p>
	Автор: <p id = "showAuthor" class="answers"><?php echo $authors[$currwork[1]]; ?></p>
	Жанр: <p id = "showGenre" class="answers"><?php echo $currwork[2]; ?></p>
	<button onclick="changeWork()" type = "button" class = "btn btn-info" id = "button1">Покажи творбата</button>
	<button onclick="changeAuthor()" type = "button" class = "btn btn-info" id = "button2">Покажи автора</button>
	<button onclick="changeGenre()" type = "button" class = "btn btn-info" id = "button3">Покажи жанра на творбата</button>
	<hr>
	<form action = "guessChar.php">
		<button class = "btn btn-info">Следващ герой</button>
	</form>
	<a href="index.php" id="homebutton">Към начална страница</a>
	
</div>
<?php
	require("footer.php");
?>