<?php
include_once('init.php');

if(isset($_REQUEST['EditTheatreSubmitted'])){
	if(!@$_REQUEST['EditTheatre']){
		$FormErrors['EditTheatre'] = "Please enter a theatre to edit.";
	}
	if(sizeof($FormErrors) == 0){
		$TheatreInfo = GetTheatre($_REQUEST['EditTheatre']);
		//echo"".$TheatreInfo['Email']."";
		//var_dump($TheatreInfo);
			echo"<div class='ContactForm'>
				<h3>Edit the theatre information here:</h3>
				<br />
				<form action='' method='post'>
				Theatre Id:
			<br /><br />";
			ReadOnlyTextBox($TheatreInfo['TheatreId'], 'TheatreId');
			echo"<br /><br />
					Theatre Name:
				<br /><br />";
			@EditTextBox($TheatreInfo['TheatreName'], 'TheatreName');
			echo"<br /><br />
					Theatre Description:
				<br /><br />";
			@EditTextArea($TheatreInfo['TheatreDescription'], 'TheatreDescription');
			echo"<br /><br />
					Email:
				<br /><br />";
			@EditTextBox($TheatreInfo['Email'], 'Email');
			echo"<br /><br />
					Street Address:
				<br /><br />";
			@EditTextBox($TheatreInfo['StreetAddress'], 'StreetAddress');
			echo"<br /><br />
					City:
				<br /><br />";
			@EditTextBox($TheatreInfo['City'], 'City');
			echo"<br /><br />
					State:
				<br /><br />";
			@EditDropDown($TheatreInfo['State'], 'State', 'Missouri', 'Illinois');
			echo"<br /><br />
					Zip:
				<br /><br />";
			@EditTextBox($TheatreInfo['Zip'], 'Zip');
			echo"<br /><br />
					Website:
				<br /><br />";
			@EditTextBox($TheatreInfo['Website'], 'Website');
			echo"<br /><br />
					Date Formed:
				<br /><br />";
			@EditDateInput($TheatreInfo['DateFormed'], 'DateFormed');
			echo"<br /><br />
					Type of theatre:
				<br /><br />";
			@EditDropDown($TheatreInfo['Type'],'Type', 'Equity', 'SPT', 'Non-Equity',
			'Community');
			echo"<br /><br />
					<input type='submit' name='TheatreFormSubmitted' />
				</form>
				</div>";

	}
}

if(isset($_REQUEST['TheatreFormSubmitted'])){
	//die("the form was submitted");
	if(!@$_REQUEST['TheatreName']){
		$FormErrors['TheatreName'] = "Theatre Name required";
	}
	if(!@$_REQUEST['TheatreDescription']){
		$FormErrors['TheatreDescription'] = "Theatre must have a description";
	}
	if(!@$_REQUEST['Email'] || !strpos($_REQUEST['Email'], '@')){
		$FormErrors['Email'] = "Must be valid email address";
	}
	if(!@$_REQUEST['StreetAddress']){
		$FormErrors['StreetAddress'] = "Address required";
	}
	if(!@$_REQUEST['City']){
		$FormErrors['City'] = "City required";
	}
	if(!@$_REQUEST['State']){
		$FormErrors['State'] = "State required";
	}
	if(!@$_REQUEST['Zip']){
		$FormErrors['Zip'] = "Zip required";
	}
	if(!@$_REQUEST['Website'] || !strpos($_REQUEST['Website'], '.')){
		$FormErrors['Website'] = "Valid website required";
	}
	if(!@$_REQUEST['DateFormed']){
		$FormErrors['DateFormed'] = "Date required";
	}
	if(!@$_REQUEST['Type']){
		$FormErrors['Type'] = "Type required";
	}
	if(sizeof($FormErrors) == 0){
		UpdateForm($_REQUEST['TheatreId'], $_REQUEST['TheatreName'],
		$_REQUEST['TheatreDescription'],
		$_REQUEST['Email'], $_REQUEST['StreetAddress'], $_REQUEST['City'],
		$_REQUEST['State'], $_REQUEST['Zip'], $_REQUEST['Website'],
		$_REQUEST['DateFormed'], $_REQUEST['Type']);
		//echo"You did it!";
		header('location:/admin/theatres/confirmation.php');
		exit;
	}
};


PrintHeader('Edit Theatre', 'Edit Theatre');
echo"<div class='ContactForm'>
	<form action='' method='get'>
	Which theatre do you want to edit?
	<br /><br />";
@TextBox('EditTheatre');
echo"<br /><br />
	<input type='submit' name='EditTheatreSubmitted' />
	</form>
	</div>";

PrintFooter();
?>
