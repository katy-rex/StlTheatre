<html>
	<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre FAQ', 'FAQ');
	?>
	<div class='Questions')>
		<?php
			$Faq = GetFaq(2)->fetch();
			var_dump($Faq);
			// foreach($Faq as $Question => $Answer){
			// 	echo"<p class='Headline'>".$Question."</p>
			// 	<p>".$Answer."</p>";
			// };
		?>
	</div>
	<?php
		PrintFooter();
