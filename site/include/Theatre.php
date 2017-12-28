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
		INSERT INTO theatrelist (TheatreName,
			TheatreDescription,
			Email,
			StreetAddress,
			City,
			State,
			Zip,
			Website,
			DateFormed,
			Type)
		VALUES(:NewTheatreName,
			:NewTheatreDescription,
			:NewEmail,
			:NewStreetAddress,
			:NewCity,
			:NewState,
			:NewZip,
			:NewWebsite,
			:NewDateFormed,
			:NewType)
		",
		array(
			'NewTheatreName' => "$TheatreName",
			'NewTheatreDescription' => "$TheatreDescription",
			'NewEmail' => "$Email",
			'NewStreetAddress' => "$StreetAddress",
			'NewCity' => "$City",
			'NewState' => "$State",
			'NewZip' => "$Zip",
			'NewWebsite' => "$Website",
			'NewDateFormed' => "$DateFormed",
			'NewType' => "$Type"
		)
	);
}

//update one theatre's info from form
function UpdateTheatre($TheatreId, $TheatreName, $TheatreDescription, $Email,
	$StreetAddress, $City, $State, $Zip, $Website, $DateFormed, $Type){
	return dbQuery("
		UPDATE theatrelist
		SET TheatreName = :MyTheatreName,
			TheatreDescription = :MyTheatreDescription,
			Email = :MyEmail,
			StreetAddress = :MyStreetAddress,
			City = :MyCity,
			State = :MyState,
			Zip = :MyZip,
			Website = :MyWebsite,
			DateFormed = :MyDateFormed,
			Type = :MyType
		WHERE TheatreId = :MyTheatreId",
		array(
			'MyTheatreId' => "$TheatreId",
			'MyTheatreName' => "$TheatreName",
			'MyTheatreDescription' => "$TheatreDescription",
			'MyEmail' => "$Email",
			'MyStreetAddress' => "$StreetAddress",
			'MyCity' => "$City",
			'MyState' => "$State",
			'MyZip' => "$Zip",
			'MyWebsite' => "$Website",
			'MyDateFormed' => "$DateFormed",
			'MyType' => "$Type"
		)
	)
	->execute();
}

function GetTheatre($TheatreName){
	return dbQuery("
		SELECT *
		FROM theatrelist
		WHERE TheatreName = :MyTheatreName",
		array(
			'MyTheatreName' => "$TheatreName"
		)
	)
	->fetch();
}


//Keeping this around in case I need to reference it later.
// $DBResult = GetTheatreList(3)->fetch();
// echo $DBResult['Category'];
