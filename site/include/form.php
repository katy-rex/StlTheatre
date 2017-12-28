<?php


$FormErrors = array();
$StateOptions = array("Illinois", "Missouri");
$TypeOptions = array("Equity", "SPT", "Non-Equity", "Community");

function TextBox($FieldName, $Value){
	global $FormErrors;
	echo"<input type='text' value='$Value' name='$FieldName' />";
	echo"$FormErrors[$FieldName]";
}

function ReadOnlyTextBox($FieldName, $Value = '@$_REQUEST["$FieldName"]'){
	echo"<input type='text' value='$Value' name='$FieldName' readonly />";
}

function TextArea($FieldName, $Value){
	global $FormErrors;
	echo"<textarea name='$FieldName' rows='10' cols='30'>"
			.$Value.
		"</textarea>";
	echo"$FormErrors[$FieldName]";
}

function DropDown($FieldName, $MenuOptions, $Value){
	global $FormErrors;
	echo"<select name='$FieldName'>";
	foreach($MenuOptions as $Option){
		echo"<option value='$Option'";
		if($Value == $Option){
			echo"selected";
		};
		echo">
				$Option
			</option>";
		}
	echo"</select>";
	echo"$FormErrors[$FieldName]";
}

function DateInput($FieldName, $Value){
	global $FormErrors;
	echo"<input type='date' value='$Value' name='$FieldName' />";
	echo"$FormErrors[$FieldName]";
}

function ValidateText($FieldName, $Message = ' Required'){
	global $FormErrors;
	if(!@$_REQUEST[$FieldName]){
		$FormErrors[$FieldName] = "$Message";
	}
}

function ValidateEmail($FieldName, $Message = ' Valid email address required'){
	global $FormErrors;
	if(!@$_REQUEST[$FieldName] ||
			!filter_var($_REQUEST['Email'], FILTER_VALIDATE_EMAIL)){
				$FormErrors[$FieldName] = "$Message";
	}
}

function ValidateWebsite($FieldName, $Message = ' Valid website required'){
	global $FormErrors;
	if(!@$_REQUEST[$FieldName] ||
		!preg_match(
			"/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i"
			,$_REQUEST['Website'])
		){
		$FormErrors[$FieldName] = "$Message";
	}
}

//.($ContactNameMissing ? "Must be 6 characters":"")."
