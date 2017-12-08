<?php

function GetAnnouncements($Announcements){
	return dbQuery("
	SELECT *
	FROM announcements
	WHERE AnnouncementId = :AnnouncementId",
	array(":AnnouncementId"=>$Announcements));
}
