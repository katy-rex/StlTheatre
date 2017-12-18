<?php


function GetNews(){
	return dbQuery("
	SELECT *
	FROM news")
	->fetchAll();
}
