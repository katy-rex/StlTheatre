<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre List', 'Theatres');
	?>
		<div class="TheatreList">
			<?php
				$TheatreList = GetTheatreList();
			//	var_dump($TheatreList);
			//	echo $TheatreList['TheatreName'];


				foreach ($TheatreList as $Row){
					echo"<p class='Headline'>".$Row['TheatreName']."</p>";
					echo"<p>".$Row['TheatreDescription']."</p>";
					echo"<p>View ".$Row['TheatreName']."'s</p>";
				};
			 ?>
		</div>
	<?php
	 	PrintFooter();
