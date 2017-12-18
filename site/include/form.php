<?php


$FormErrors = array();
$StateOptions = array("Illinois", "Missouri");
$TypeOptions = array("Equity", "SPT", "Non-Equity", "Community");

function TextBox($FieldName){
	global $FormErrors;
	echo"<input type='text' value='".@$_REQUEST[$FieldName]."'
		name='$FieldName' />";
	echo"$FormErrors[$FieldName]";
}

function EditTextBox($Value, $FieldName){
	global $FormErrors;
	echo"<input type='text' value='$Value' name='$FieldName' />";
	echo"$FormErrors[$FieldName]";
}

function ReadOnlyTextBox($Value, $FieldName){
	echo"<input type='text' value='$Value' name='$FieldName' readonly />";
}

function DropDown($FieldName, $MenuOptions){
	global $FormErrors;
	echo"<select value='".@$_REQUEST[$FieldName]."' name='$FieldName'>";
	foreach($MenuOptions as $Option){
		echo"<option value='$Option'>
					$Option
				</option>";
			}
		echo"</select>";
	echo"$FormErrors[$FieldName]";
}

function EditDropDown($Value, $FieldName, $Option1, $Option2, $Option3, $Option4){
	global $FormErrors;
	echo"<select value='$Value' name='$FieldName'>
			<option value='$Option1'>
				$Option1
			</option>
			<option value='$Option2'>
				$Option2
			</option>
			<option value='$Option3'>
				$Option3
			</option>
			<option value='$Option4'>
				$Option4
			</option>
		</select>";
	echo"$FormErrors[$FieldName]";
}

function TextArea($FieldName){
	global $FormErrors;
	echo"<textarea value='".@$_REQUEST[$FieldName]."' name='$FieldName'
		rows='10' cols='30'></textarea>";
	echo"$FormErrors[$FieldName]";
}

function EditTextArea($Value, $FieldName){
	global $FormErrors;
	echo"<textarea value='$Value' name='$FieldName' rows='10'
		cols='30'></textarea>";
	echo"$FormErrors[$FieldName]";
}

function DateInput($FieldName){
	global $FormErrors;
	echo"<input type='date' value='".@$_REQUEST[$FieldName]."'
		name='$FieldName' />";
	echo"$FormErrors[$FieldName]";
}

function EditDateInput($Value, $FieldName){
	global $FormErrors;
	echo"<input type='date' value='$Value'
		name='$FieldName' />";
	echo"$FormErrors[$FieldName]";
}

//.($ContactNameMissing ? "Must be 6 characters":"")."
