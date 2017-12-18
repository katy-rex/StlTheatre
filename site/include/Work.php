<?php

function GetWorkList(){
	return dbQuery("
	SELECT *
	FROM jobs")
	->fetchAll();
}
