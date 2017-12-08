<?php


function GetNews($NewsId){
	return dbQuery("
	SELECT *
	FROM news
	WHERE NewsId = :NewsId",
	array(":NewsId"=>$NewsId));
}
