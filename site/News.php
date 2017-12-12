<html>
	<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre News', 'News');
	?>
		<div class="News">
			<?php
				$News = GetNews();
				//var_dump($News);
				foreach ($News as $Row){
					echo"<p class='Headline'>".$Row['NewsHeadline']."</p>";
					echo"<p>".$Row['NewsBlurb']."</p>";
					echo"<p class='Submitter'>Submitted by <b>"
					.$Row['Submitter']."</b> on ".$Row['SubmitDate']."</p>";
				};
			 ?>
		</div>
	<?php
	 	PrintFooter();
