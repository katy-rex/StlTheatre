<?php

function GetAnnouncements(){
	return dbQuery("
	SELECT *
	FROM announcements")
	->fetchAll();
}
