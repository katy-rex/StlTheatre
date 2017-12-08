<?php

function GetWorkList($WorkId){
	return dbQuery("
	SELECT *
	FROM jobs
	WHERE JobId = :JobId",
	array(":JobId"=>$WorkId));
}
