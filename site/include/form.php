<?php


$FormErrors = array();

function TextBox($FieldName, $SubmitName){
	global $FormErrors;
	echo"<input type='text' value='".@$_REQUEST[$FieldName]."' name='$FieldName' />";
	echo"$FormErrors[$FieldName]";
}

function DropDown($FieldName, $Option1, $Option2, $Option3, $SubmitName){
	global $FormErrors;
	echo"<select name='$FieldName'>
	<option value='$Option1'>
		$Option1
	</option>
	<option value='$Option2'>
		$Option2
	</option>
	<option value='$Option3'>
		$Option3
	</option>
	</select>";
	echo"$FormErrors[$FieldName]";
}

function TextArea($FieldName, $SubmitName){
	global $FormErrors;
	echo"<textarea name='$FieldName' rows='10' cols='30'></textarea>";
	echo"$FormErrors[$FieldName]";
}

// function Date($FieldName){
// 	global $FormErrors;
// 	echo"<input type=''
// }

//.($ContactNameMissing ? "Must be 6 characters":"")."
