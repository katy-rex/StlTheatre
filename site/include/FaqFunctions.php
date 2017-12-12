<?php


function GetFaq(){
	return dbQuery("
	SELECT *
	FROM faq")
	->fetchAll();
}
