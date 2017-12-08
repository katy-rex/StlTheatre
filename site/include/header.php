<?php

function PrintHeader($SiteTitle, $PageTitle){
	echo"
	<head>
	<link rel='stylesheet' type='text/css' href='/Style.css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway'
	rel='stylesheet'>
		<title>"
			.$SiteTitle.
		"</title>
	</head>
	<body>
		<div class='Header'>
			<div class='HeaderImage'>
				<img src='/Curtain.jpg' alt='Curtains'
				width='100%' height='30%' />
				<div class='HeaderLine'>
					<h1>
					St. Louis Theatre
					</h1>
				</div>
			</div>
			<div class='NavBar'>
				<a href='index.php'>
					<div class='NavButton'>
						<p>
							Home
						</p>
					</div>
				</a>
				<a href='News.php'>
					<div class='NavButton'>
						<p>
							News
						</p>
					</div>
				</a>
				<a href='Calendar.php'>
					<div class='NavButton'>
						<p>
							Calendar
						</p>
					</div>
				</a>
				<a href='Work.php'>
					<div class='NavButton'>
						<p>
							Work
						</p>
					</div>
				</a>
				<a href='Theatres.php'>
					<div class='NavButton'>
						<p>
							Theatres
						</p>
					</div>
				</a>
			</div>
		</div>
		<div class='PageTitle'>
			<h2>"
				.$PageTitle.
			"</h2>
		</div>
		<div class='DivideLine'>
		</div>";
}

function PrintFooter(){
	echo"
		<div class='Footer'>
			<a href='FAQ.php'>
				<div class='FooterButton'>
					<p>
						FAQ
					</p>
				</div>
			</a>
			<a href='Contact.php'>
				<div class='FooterButton'>
					<p>
						Contact
					</p>
				</div>
			</a>
		</div>
	</body>";
}
