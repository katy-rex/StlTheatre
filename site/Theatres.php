<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre List', 'Theatres');
	?>
		<div class="TheatreList">
			<?php
				$TheatreList = TheatreListAlpha();
				//asort($TheatreList);
				foreach ($TheatreList as $Row){
					echo"<p class='Headline'>".$Row['TheatreName']."</p>";
					echo"<p>".$Row['TheatreDescription']."</p>";
					echo"<p>View website: ".$Row['Website']."</p>";
					echo"<p>Contact: ".$Row['Email']."</p>";
				};
			 ?>
		</div>
	<?php
	 	PrintFooter();
