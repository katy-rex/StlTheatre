<html>
	<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre News', 'News');
	?>
		<div class="News">
			<?php
				$News = GetNews();
				foreach ($News as $Row){
					echo"<p class='Headline'>".$Row['Headline']."</p>";
					echo"<p>".$Row['Blurb']."</p>";
					echo"<p class='Submitter'>Submitted by <b>"
					.$Row['Submitter']."</b> on ".$Row['SubmitDate']."</p>";
				};
			 ?>
		</div>
	<?php
	 	PrintFooter();
