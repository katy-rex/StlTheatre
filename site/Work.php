<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre Job Listings', 'Work');
	?>
		<div class="WorkList">
			<?php
				$Worklist = GetWorkList();
				//var_dump($Worklist);

				// $Work3 = GetWorkList(3)->fetch();
                    //
				// echo $Work3['JobDescription'];
				foreach ($Worklist as $Row){
					echo"<p class='Headline'>".$Row['JobName']."</p>";
					echo"<p>".$Row['JobDescription']."</p>";
					echo"<p class='Submitter'>Submitted by <b>"
					.$Row['TheatreId']."</b> on ".$Row['DateSubmitted']."</p>";
				};
			?>
		</div>
	<?php
 		PrintFooter();
