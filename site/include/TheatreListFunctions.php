<?php

function GetTheatreList($TheatreList){
	return dbQuery("
	SELECT *
	FROM theatrelist
	WHERE TheatreId = :TheatreId",
	array(":TheatreId"=>$TheatreList));
}


//Keeping this around incase I need to reference it later.
// $DBResult = GetTheatreList(3)->fetch();
// echo $DBResult['Category'];
