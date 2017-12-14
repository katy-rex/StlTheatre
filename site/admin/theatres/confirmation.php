<html>
<?php
		include_once('init.php');
		PrintHeader('Confirmation Page', 'Updated!');
	?>
		<div class="TheatreList">
			<p>The theatre has been edited! Would you like to edit another?</p>
			<a href='/admin/theatres/edit.php'>
				<div class='NavButton'>
					<p>
						Edit Theatres
					</p>
				</div>
			</a>
		</div>
	<?php
	 	PrintFooter();
