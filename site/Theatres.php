<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre List', 'Theatres');
	?>
		<div class="TheatreList">
			<?php
				GetTheatreList();
			 ?>
		</div>
	<?php
	 	PrintFooter();
