<?php

//pull all Theatre info
function GetTheatreList(){
	return dbQuery("
	SELECT *
	FROM theatrelist")
	->fetchAll();
}

//pull all Theatre info alphabetically
function TheatreListAlpha(){
	return dbQuery("
	SELECT *
	FROM theatrelist
	ORDER BY TheatreName")
	->fetchAll();
}

//create a new theatre with all form info
function CreateTheatre($TheatreName, $TheatreDescription, $Email, $StreetAddress,
	$City, $State, $Zip, $Website, $DateFormed, $Type){
	return dbQuery("
		INSERT INTO theatrelist (TheatreName, TheatreDescription, Email,
			StreetAddress, City, State, Zip, Website, DateFormed, Type)
		VALUES('$TheatreName', '$TheatreDescription', '$Email',
			'$StreetAddress', '$City', '$State', '$Zip', '$Website',
			'$DateFormed', '$Type')"
		);
}

//update one theatre's info from form
function UpdateTheatre($TheatreId, $TheatreName, $TheatreDescription, $Email,
	$StreetAddress, $City, $State, $Zip, $Website, $DateFormed, $Type){
	return dbQuery("
		UPDATE theatrelist
		SET TheatreName = '$TheatreName',
			TheatreDescription = '$TheatreDescription', Email = '$Email',
			StreetAddress = '$StreetAddress', City = '$City', State = '$State',
			Zip = '$Zip', Website = '$Website', DateFormed = '$DateFormed',
			Type = '$Type'
		WHERE TheatreId = '$TheatreId'
	")
	->execute();
}

function GetTheatre($TheatreName){
	return dbQuery("
		SELECT *
		FROM theatrelist
		WHERE TheatreName='$TheatreName'")
	->fetch();
}


//Keeping this around in case I need to reference it later.
// $DBResult = GetTheatreList(3)->fetch();
// echo $DBResult['Category'];
