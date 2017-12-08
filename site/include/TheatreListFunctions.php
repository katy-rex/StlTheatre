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

	return $TheatreList;
}

return GetTheatreList();
