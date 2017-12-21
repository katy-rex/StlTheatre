<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre List', 'Theatres');
	?>
		<div class="TheatreList">
			<?php
				$TheatreList = TheatreListAlpha();
				foreach ($TheatreList as $Row){
					echo"<p class='Headline'>"
							.$Row['TheatreName'].
						"</p>
						<p>"
							.$Row['TheatreDescription'].
						"</p>
						<p><b>Website:</b> "
							.$Row['Website'].
						"</p>
						<p><b>Contact:</b> "
							.$Row['Email'].
						"</p>
						<p><b>Date Formed:</b> "
							.$Row['DateFormed'].
						"</p>
						<p><b>Address:</b> "
							.$Row['StreetAddress'].
						", "
							.$Row['City'].
						", "
							.$Row['State'].
						", "
							.$Row['Zip'].
						"</p>
						<p><b>Type:</b> "
							.$Row['Type'].
						"</p>";
				};
			 ?>
		</div>
	<?php
	 	PrintFooter();
