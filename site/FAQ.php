<html>
	<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre FAQ', 'FAQ');
	?>
	<div class='Questions')>
		<?php
			$Faq = GetFaq();
			//var_dump($Faq);
			foreach($Faq as $Row){
				echo"<p class='Headline'>".$Row['Question']."</p>
				<p>".$Row['Answer']."</p>";
			};
		?>
	</div>
	<?php
		PrintFooter();
