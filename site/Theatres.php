<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre List', 'Theatres');
	?>
		<div class="TheatreList">
			<?php
				$TheatreList = GetTheatreList();
				foreach ($TheatreList as $Row){
					echo"<p class='Headline'>".$Row['TheatreName']."</p>";
					echo"<p>".$Row['TheatreDescription']."</p>";
					echo"<p>View ".$Row['TheatreName']."'s <a href="
					.$Row['Profile'].">profile</a>";
				};
			 ?>
		</div>
	<?php
	 	PrintFooter();
