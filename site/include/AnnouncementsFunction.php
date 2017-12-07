<?php

function GetAnnouncements(){
	$Announcement=array (
		"Came here for work?"=>"Check out the Work page for
		new auditions and job postings.",
		"What should you see this weekend?"=>"Check out
		the Calendar for all this weekend's shows!",
		"A great new resource!"=>"The new St. Louis
		Theatre website is live!"
	);

	foreach($Announcement as $Headline => $Blurb){
		echo"<p class='Headline'>".$Headline."</p>";
		echo"<p>".$Blurb."</p>";
	};
}
