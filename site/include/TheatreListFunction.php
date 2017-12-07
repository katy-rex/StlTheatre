<?php

function GetTheatreList(){
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
		echo"<p class='Headline'>".$Row['TheatreName']."</p>";
		echo"<p>".$Row['TheatreDescription']."</p>";
		echo"<p>View ".$Row['TheatreName']."'s <a href="
		.$Row['Profile'].">profile</a>";
	};
}
