<?php
include_once('init.php');
PrintHeader('Create Theatre', 'Create Theatre');


if(isset($_REQUEST['TheatreFormSubmitted'])){
	//die("the form was submitted");
	if(!@$_REQUEST['TheatreName'] || strlen($_REQUEST['TheatreName']) < 6){
		$FormErrors['TheatreName'] = "Must be at least 6 characters long";
	}
	if(sizeof($FormErrors) == 0){
		SaveForm($_REQUEST['TheatreName'], $_REQUEST['TheatreDescription'],
		$_REQUEST['Email']);
		header('location:/theatres.php');
		exit;
	}
};



echo"<div class='ContactForm'>
	<form action='' method='post'>
		Theatre Name:
		<br /><br />";
@TextBox('TheatreName');
echo"<br /><br />
		Theatre Description:
	<br /><br />";
@TextArea('TheatreDescription');
echo"<br /><br />
		Email:
	<br /><br />";
@TextBox('Email');
echo"<br /><br />
	<input type='submit' name='TheatreFormSubmitted' />
	</form>
	</div>";


function SaveForm($TheatreName, $TheatreDescription, $Email){
	//echo"hi";
	return dbQuery("
	INSERT INTO theatrelist (TheatreName, TheatreDescription, Email)
	VALUES('$TheatreName', '$TheatreDescription', '$Email')");
}

PrintFooter();
