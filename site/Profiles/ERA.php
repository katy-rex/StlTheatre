<html>
	<?php
	  	include_once('init.php');
	  	PrintHeader('St. Louis Theatre Profile', 'ERA');
  	?>
	<div class="About">
		<h3>
			About
		</h3>
		<p>
			This is the about copy. Where people submit what their
			theatre is about.
		</p>
	</div>
	<div class="DivideLine">
	</div>
	<div class="News">
		<h3>
			News
		</h3>
		<?php
		$News=array(
			array(
				"Headline"=>"Residents of Craigslist is back!",
				"Blurb"=>"ERA is bringing the old favorite back
				to St. Louis. This December, catch all your
				favorite critters at The Centene Center for the
				Arts.",
				"Submitter"=>"ERA",
				"SubmitDate"=>"12/3/2017"
			),
		);

		foreach ($News as $Row){
			echo"<p class='Headline'>".$Row['Headline']."</p>";
			echo"<p>".$Row['Blurb']."</p>";
			echo"<p class='Submitter'>Submitted by <b>"
			.$Row['Submitter']."</b> on ".$Row['SubmitDate']."</p>";
		}
		?>
	</div>
	<?php
		PrintFooter();
