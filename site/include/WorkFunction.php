<?php

function GetWorkList(){
	$Work=array(
		array(
			"JobName"=>"SATE: Audition notice for APHRA BEHN
			EMERGING ARTISTS' FESTIVAL and NO EXIT",
			"JobDescription"=>"SATE will host non-equity
			auditions for two productions in its 2018 season,
			Season of Entrapment on Monday, December 18 from
			6:00-9:00pm at 3547 Olive Street, St. Louis, MO
			63103. SATE will be holding auditions for roles
			in the Aphra Behn Emerging Artists' Festival and
			No Exit.<br /><br />
			Auditions will consist of cold readings from the
			scripts; sides will be available one week prior
			to auditions. Actors auditioning are asked to
			sign up for a 90 minute slot on a first sign up
			basis: 6:00-7:30pm or 7:30-9:00pm. Please email
			a resume and headshot; as we will not require you
			to bring hard copies to the audition. If you
			have auditioned for SATE within the last year;
			you will not be required to re-submit your
			headshot and resume. If you would like to
			audition, please email rachel@slightlyoff.org.
			Please indicate which production (or both) you
			would like to audition for and which time slot
			you prefer. All positions are paid.<br /><br />
			SATE seeks to continue its tradition of not only
			auditioning, but producing color and gender
			conscious casts.<br /><br />
			Production dates: March 9-11, 2018
			(Friday-Sunday) at the Centene Center for Arts.
			All performances at 8pm. Tech will take place
			between Tuesday, March 6 and Thursday,
			March 8. Please come prepared with all
			conflicts starting February 12, 2018.",
			"Submitter"=>"Slightly Askew Theatre Ensemble",
			"SubmitDate"=>"12/3/2017"
		),
		array(
			"JobName"=>"Sketch Writers for Bare Knuckle Comedy",
			"JobDescription"=>"Bare Knuckle Comedy is a
			comedy show/production company working in St.
			Louis, Chicago and throughout the United States.
			<br /><br />
			We are currently looking for sketch writers for
			the 2018 live season of Bare Knuckle Comedy.
			<br /><br />
			The perfect candidate will be someone with sketch
			writing/performing experience (preferably some
			stand up experience as well) who is looking for
			more than just doing local comedy. The ability to
			write a story within a 3-act narrative is an
			important factor, and the ability to add jokes
			into an existing narrative would be terrific.
			Candidates should submit a short (no more than
			five page) sketch script.
			<br /><br />
			In addition to writing for the live show,
			selected candidates would have the opportunity to
			assist in writing for Bare Knuckle Comedy's
			upcoming video projects (for which we are
			partnering with video/audio professionals from
			Coolfire Media and other production houses).
			Furthermore, Bare Knuckle Comedy has participated
			in multiple comedy festivals & selected candidates
			would be able to participate in the future.
			<br /><br />
			Bare Knuckle Comedy distinguishes itself from
			other live stand up or sketch comedy shows by
			combining them. The show revolves around a 3-act
			sketch comedy narrative played out by the
			cast/hosts, punctuated by stand up comics (think
			30 Rock meets Comedy Central Presents).
			<br /><br />
			Bare Knuckle Comedy \"kick-started the alt comedy
			scene in St. Louis in 2009\" (Riverfront Times),
			and has continued to be the \"best comedy show in
			St. Louis\" (Marlena Rodriguez, staff writer for
			The Unbreakable Kimmy Schmidt). The show \"has
			become a stop for touring indie comics from
			across the country\" (Alive Magazine) and past
			comics include veteran comedians such as Nikki
			Glaser and many, many more. Bare Knuckle Comedy
			has been producing shows since 2009.",
			"Submitter"=>"Bare Knuckle Comedy, LLC",
			"SubmitDate"=>"12/1/2017"
		),
		array(
			"JobName"=>"WOMAN PLAYWRIGHTS NEEDED!",
			"JobDescription"=>"We are now accepting
			submissions from woman playwrights for our new
			concoction, OR WHAT YOU WILL, THE THIRD!
			<br /><br />
			It's a choose your own adventure of sketches
			inspired by RICHARD III that will be performed
			at The Chapel in April 2018.
			<br /><br />
			The original OR WHAT YOU WILL premiered at the
			St. Louis Fringe Festival in 2015 with twelve
			original sketches, and won the Butts In Seats
			award. The second iteration, OR WHAT YOU WILL,
			PART DEUX, won the 2016 St Lou Fringe Spirit of
			Fringe award.
			<br /><br />
			Each sketch will be put into an audience-created,
			tournament bracket called MIDSUMMER MADNESS.
			<br />
			Submissions must follow these guidelines:
			<br />
			-0-5 Minutes long
			<br />
			-A scene, a play, a song, a poem, a description
			of movement or action; anything that we can put
			on stage in that 0-5 min time frame
			<br />
			-Must be able to be performed by 1-6 actors
			<br />
			-Related to or inspired by Shakespeare's RICHARD
			III in some way
			<br /><br />
			Deadline for submissions is DECEMBER 31, 2017.
			Email submissions and questions to
			poormonsters@gmail.com.",
			"Submitter"=>"Shakespeare Festival St. Louis",
			"SubmitDate"=>"11/20/2017"
		)
	);

	foreach ($Work as $Row){
		echo"<p class='Headline'>".$Row['JobName']."</p>";
		echo"<p>".$Row['JobDescription']."</p>";
		echo"<p class='Submitter'>Submitted by <b>"
		.$Row['Submitter']."</b> on ".$Row['SubmitDate']."</p>";
	};
}
