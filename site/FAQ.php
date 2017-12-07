<html>
   <?php
		include_once('init.php');
		$SiteTitle = 'St. Louis Theatre FAQ';
		$PageTitle = 'FAQ';
		PrintHeader($SiteTitle, $PageTitle);
	?>
		<div class="Questions">
			<?php
				$FAQ=array (
					"Question 1?"=>"Answer to question 1.",
					"What should you see this weekend?"=>"Go see a show!",
					"Question 3?"=>"The answer to question 3."
				);

				foreach($FAQ as $Question => $Answer){
					echo "<p class='Headline'>".$Question."</p>";
					echo "<p>".$Answer."</p>";
				}
			?>
		</div>
	<?php
		PrintFooter();