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
					echo"<p><b>Website:</b> ".$Row['Website']."</p>";
					echo"<p><b>Contact:</b> ".$Row['Email']."</p>";
					echo"<p><b>Date Formed:</b> ".$Row['DateFormed']."</p>";
					echo"<p><b>Address:</b> ".$Row['StreetAddress'].", "
					.$Row['City'].", ".$Row['State'].", "
					.$Row['Zip']."</p>";
				};
			 ?>
		</div>
	<?php
	 	PrintFooter();
