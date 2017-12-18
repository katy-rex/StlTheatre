<?php
include_once('init.php');



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
		CreateTheatre($_REQUEST['TheatreName'], $_REQUEST['TheatreDescription'],
		$_REQUEST['Email'], $_REQUEST['StreetAddress'], $_REQUEST['City'],
		$_REQUEST['State'], $_REQUEST['Zip'], $_REQUEST['Website'],
		$_REQUEST['DateFormed'], $_REQUEST['Type']);
		echo"You did it!";
		//header('location:/theatres.php');
		exit;
	}
};

PrintHeader('Create Theatre', 'Create Theatre');

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
		Street Address:
	<br /><br />";
@TextBox('StreetAddress');
echo"<br /><br />
		City:
	<br /><br />";
@TextBox('City');
echo"<br /><br />
		State:
	<br /><br />";
@DropDown('State', $StateOptions);
echo"<br /><br />
		Zip:
	<br /><br />";
@TextBox('Zip');
echo"<br /><br />
		Website:
	<br /><br />";
@TextBox('Website');
echo"<br /><br />
		Date Formed:
	<br /><br />";
@DateInput('DateFormed');
echo"<br /><br />
		Type of theatre:
	<br /><br />";
@DropDown('Type', $TypeOptions);
echo"<br /><br />
			<input type='submit' name='TheatreFormSubmitted' />
		</form>
	</div>";

PrintFooter();
