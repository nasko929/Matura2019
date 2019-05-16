<?php 
	require("header.php");
?>

<div id = "fixedtext">
	Тук ще се изписва информацията за съответното произведение, на което кликнете. :)
</div>
<div class = "mainpart">
	<ol>
		<?php
			for($i = 0;$i < sizeof($authors); $i ++)
			{
				echo '<li id="author">'.$authors[$i].'</li>';
				echo '<ul>';
				for($j = 0; $j < sizeof($works);$j ++)
				{
					if($works[$j][1] == $i)
					{
						echo '<li>';
						$genre = $works[$j][2];
						$char = "<br>- ";
						for($k = 0;$k < sizeof($chars);$k ++)
						{
							if($chars[$k][1] == $j)
								$char = $char . $chars[$k][0]. "<br>- ";
						}
						$char = substr_replace($char ,"", -2);
						$currString = "Ivan('".$genre."','".$char."')";
						echo '<p style="cursor: pointer" onclick="'.$currString.'">'.$works[$j][0].'</p>';
						echo '</li>';
					}
				}
				echo '</ul>';
			}
		?>
	</ol>
	<br>
	<a href="index.php" id="homebutton">Към начална страница</a>
</div>


<?php
	require("footer.php");
?>