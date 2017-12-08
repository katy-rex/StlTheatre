<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre Job Listings', 'Work');
	?>
		<div class="WorkList">
			<?php
				$Work = GetWorkList();
				foreach ($Work as $Row){
					echo"<p class='Headline'>".$Row['JobName']."</p>";
					echo"<p>".$Row['JobDescription']."</p>";
					echo"<p class='Submitter'>Submitted by <b>"
					.$Row['Submitter']."</b> on ".$Row['SubmitDate']."</p>";
				};
			?>
		</div>
	<?php
 		PrintFooter();
