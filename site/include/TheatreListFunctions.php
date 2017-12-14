<?php

function GetTheatreList(){
	return dbQuery("
	SELECT *
	FROM theatrelist")
	->fetchAll();
}

function TheatreListAlpha(){
	return dbQuery("
	SELECT *
	FROM theatrelist
	ORDER BY TheatreName")
	->fetchAll();
}


//Keeping this around in case I need to reference it later.
// $DBResult = GetTheatreList(3)->fetch();
// echo $DBResult['Category'];
