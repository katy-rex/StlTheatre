<html>
	<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre FAQ', 'FAQ');
	?>
	<div class='Questions')>
		<?php
			$Faq = GetFaq();
			foreach($Faq as $Question => $Answer){
				echo"<p class='Headline'>".$Question."</p>
				<p>".$Answer."</p>";
			};
		?>
	</div>
	<?php
		PrintFooter();
