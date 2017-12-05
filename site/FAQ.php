<html>
	<head>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway"
	rel="stylesheet">
		<title>
			St. Louis Theatre FAQ
		</title>
	</head>
	<body>
		<div class="Header">
			<?php include 'include/header.php';
				PrintHeader();
			?>
		</div>
		<div class="PageTitle">
			<h2>
				FAQ
			</h2>
		</div>
		<div class="DivideLine">
		</div>
		<div class="Questions">
			<?php
				$FAQ=array (
					"Question 1?"=>"Answer to question 1.",
					"What should you see this weekend?"=>"Go see a show!",
					"Question 3?"=>"The answer to question 3."
				);

				foreach($FAQ as $Question => $Answer){
					echo "<p class='Headline'>".$Question."</p>";
					echo "<p>".$Answer."</p>";
				}
			?>
		</div>
		<div class="IncludeFooter">
			<?php include 'include/footer.php';
				PrintFooter();
			?>
		</div>
	</body>
</html>
