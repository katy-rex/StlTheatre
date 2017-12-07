<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre Job Listings', 'Work');
	?>
		<div class="WorkList">
			<?php
				GetWorkList();
			?>
		</div>
	<?php
 		PrintFooter();
