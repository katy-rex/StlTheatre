<html>
	<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre News', 'News');
	?>
		<div class="News">
			<?php
				GetNews();
			 ?>
		</div>
	<?php
	 	PrintFooter();
