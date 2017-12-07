<html>
	<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre FAQ', 'FAQ');
	?>
	<div class='Questions')>
		<?php
			GetFaqQuestions();
		?>
	</div>
	<?php
		PrintFooter();
