<?php

function GetTheatreList(){
	return dbQuery("
	SELECT *
	FROM theatrelist")
	->fetchAll();
}


//Keeping this around in case I need to reference it later.
// $DBResult = GetTheatreList(3)->fetch();
// echo $DBResult['Category'];
