<html>
	<head>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway"
	rel="stylesheet">
		<title>
			St. Louis Theatre
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
				Home
			</h2>
		</div>
		<div class="DivideLine">
		</div>
		<div class="Announcements">
			<h3>
				Announcements
			</h3>
			<?php
				$Announcement=array (
					"Came here for work?"=>"Check out the Work page for
					new auditions and job postings.",
					"What should you see this weekend?"=>"Check out
					the Calendar for all this weekend's shows!",
					"A great new resource!"=>"The new St. Louis
					Theatre website is live!"
				);

				foreach($Announcement as $Headline => $Blurb){
					echo "<p class='Headline'>".$Headline."</p>";
					echo "<p>".$Blurb."</p>";
				}
			?>
		</div>
		<div class="DivideLine">
		</div>
		<div class="About">
			<h3>
				About
			</h3>
			<p>
				This is the about copy. Where I write what this website
				is about. <br /> Maybe I'll add some jokes and sappy stories
				to make it more interesting. <br /> And I'll write more and
				more and more and more and more to make sure that I can
				really test everything out! <br /> Here goes! I'm writing a
				whole bunch! This is exciting! Here's more about this website.
				<br />
				This is the about copy. Where I write what this website
				is about. <br /> Maybe I'll add some jokes and sappy stories
				to make it more interesting. <br /> And I'll write more and
				more and more and more and more to make sure that I can
				really test everything out! <br /> Here goes! I'm writing a
				whole bunch! This is exciting! Here's more about this website.
				<br />
				This is the about copy. Where I write what this website
				is about. <br /> Maybe I'll add some jokes and sappy stories
				to make it more interesting. <br /> And I'll write more and
				more and more and more and more to make sure that I can
				really test everything out! <br /> Here goes! I'm writing a
				whole bunch! This is exciting! Here's more about this website.
			</p>
		</div>
		<div class="IncludeFooter">
			<?php include 'include/footer.php';
				PrintFooter();
			?>
		</div>
	</body>
</html>
