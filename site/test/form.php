<?php



$FormErrors = array();

if(isset($_REQUEST['ContactFormSubmitted'])){
	//die("the form was submitted");
	if(!@$_REQUEST['ContactName'] || strlen($_REQUEST['ContactName']) < 6){
		$FormErrors['ContactName'] = "Must be 6 characters long";
	}
	if(sizeof($FormErrors) = 0){
		$ContactId = SaveForm();
		header('location:confirm.php?ContactId='.$ContactId);
		exit;
	}
}

echo"

<form action='' method='post'>
	<input type='text' value='".@$_REQUEST['ContactName']."' name='ContactName' />
	".($ContactNameMissing ? "Must be 6 characters":"")."
	<br />
	<input type='submit' name='ContactFormSubmitted' />
</form>

";

function SaveForm(){
	//run the db query
}

// function TextBox(){
//
// }
