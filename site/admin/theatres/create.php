<?php
include_once('init.php');

if(isset($_REQUEST['TheatreFormSubmitted'])){
	ValidateText('TheatreName');
	ValidateText('TheatreDescription');
	ValidateEmail('Email');
	ValidateText('StreetAddress');
	ValidateText('City');
	ValidateText('Zip');
	ValidateWebsite('Website');
	ValidateText('DateFormed');
	if(sizeof($FormErrors) == 0){
		CreateTheatre($_REQUEST['TheatreName'],
			$_REQUEST['TheatreDescription'],
			$_REQUEST['Email'],
			$_REQUEST['StreetAddress'],
			$_REQUEST['City'],
			$_REQUEST['State'],
			$_REQUEST['Zip'],
			$_REQUEST['Website'],
			$_REQUEST['DateFormed'],
			$_REQUEST['Type']
		);
		header('location:/admin/theatres/index.php');
		exit;
	}
};

PrintHeader('Create Theatre', 'Create Theatre');

echo"<div class='ContactForm'>
		<form action='' method='post'>
			Theatre Name:
		<br /><br />";
@TextBox('TheatreName', @$_REQUEST['TheatreName']);
echo"<br /><br />
		Theatre Description:
	<br /><br />";
@TextArea('TheatreDescription', @$_REQUEST['TheatreDescription']);
echo"<br /><br />
		Email:
	<br /><br />";
@TextBox('Email', @$_REQUEST['Email']);
echo"<br /><br />
		Street Address:
	<br /><br />";
@TextBox('StreetAddress', @$_REQUEST['StreetAddress']);
echo"<br /><br />
		City:
	<br /><br />";
@TextBox('City', @$_REQUEST['City']);
echo"<br /><br />
		State:
	<br /><br />";
@DropDown('State', $StateOptions, @$_REQUEST['State']);
echo"<br /><br />
		Zip:
	<br /><br />";
@TextBox('Zip', @$_REQUEST['Zip']);
echo"<br /><br />
		Website:
	<br /><br />";
@TextBox('Website', @$_REQUEST['Website']);
echo"<br /><br />
		Date Formed:
	<br /><br />";
@DateInput('DateFormed');
echo"<br /><br />
		Type of theatre:
	<br /><br />";
@DropDown('Type', $TypeOptions, @$_REQUEST['Type']);
echo"<br /><br />
			<input type='submit' name='TheatreFormSubmitted' />
		</form>
	</div>";

PrintFooter();
