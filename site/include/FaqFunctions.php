<?php


function GetFaq($FaqId){
	return dbQuery("
	SELECT *
	FROM faq
	WHERE FaqId = :FaqId",
	array(":FaqId"=>$FaqId));
}
