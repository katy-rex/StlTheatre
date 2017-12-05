<html>
	<head>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway"
	rel="stylesheet">
		<title>
			St. Louis Theatre Theatres
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
				Theatres
			</h2>
		</div>
		<div class="DivideLine">
		</div>
		<div class="TheatreList">
			<?php
				$TheatreList=array(
					array(
						"TheatreName"=>"ERA",
						"TheatreDescription"=>"ERA is an experimental
						company that is highly collaborative.",
						"Profile"=>"profiles/era.php",
					),
					array(
						"TheatreName"=>"YoungLiars",
						"TheatreDescription"=>"Another great experimental
						theatre.",
						"Profile"=>"profiles/youngliars.php",
					),
					array(
						"TheatreName"=>"Slightly Askew Theatre Ensemble",
						"TheatreDescription"=>"Yet another great theatre
						company in St. Louis",
						"Profile"=>"profiles/SATE.php",
					)
				);

				foreach ($TheatreList as $Row){
					echo "<p class='Headline'>".$Row['TheatreName']."</p>";
					echo "<p>".$Row['TheatreDescription']."</p>";
					echo "<p>View ".$Row['TheatreName']."'s <a href="
					.$Row['Profile'].">profile</a>";
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
