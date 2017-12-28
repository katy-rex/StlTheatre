<?php
include_once('init.php');

if(isset($_REQUEST['TheatreFormSubmitted'])){
	//die("the form was submitted");
	ValidateText('TheatreName');
	ValidateText('TheatreDescription');
	ValidateEmail('Email');
	ValidateText('StreetAddress');
	ValidateText('City');
	ValidateText('Zip');
	ValidateWebsite('Website');
	ValidateText('DateFormed');
	if(sizeof($FormErrors) == 0){
		UpdateTheatre($_REQUEST['TheatreId'],
				$_REQUEST['TheatreName'],
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
		header('location:/admin/theatres/confirmation.php');
		exit;
	}
};

if(isset($_REQUEST['EditTheatreSubmitted'])){
	ValidateText('EditTheatre', ' Please enter a theatre to edit');
	if(sizeof($FormErrors) == 0){
		$TheatreInfo = GetTheatre($_REQUEST['EditTheatre']);
		echo"<div class='ContactForm'>
			<h3>Edit the theatre information here:</h3>
			<br />
			<form action='' method='post'>
				Theatre Id:
			<br /><br />";
		ReadOnlyTextBox('TheatreId', $TheatreInfo['TheatreId']);
		echo"<br /><br />
				Theatre Name:
			<br /><br />";
		@TextBox('TheatreName', $TheatreInfo['TheatreName']);
		echo"<br /><br />
				Theatre Description:
			<br /><br />";
		@TextArea('TheatreDescription', $TheatreInfo['TheatreDescription']);
		echo"<br /><br />
				Email:
			<br /><br />";
		@TextBox('Email', $TheatreInfo['Email']);
		echo"<br /><br />
				Street Address:
			<br /><br />";
		@TextBox('StreetAddress', $TheatreInfo['StreetAddress']);
		echo"<br /><br />
				City:
			<br /><br />";
		@TextBox('City', $TheatreInfo['City']);
		echo"<br /><br />
				State:
			<br /><br />";
		@DropDown('State', $StateOptions, $TheatreInfo['State']);
		echo"<br /><br />
				Zip:
			<br /><br />";
		@TextBox('Zip', $TheatreInfo['Zip']);
		echo"<br /><br />
				Website:
			<br /><br />";
		@TextBox('Website', $TheatreInfo['Website']);
		echo"<br /><br />
				Date Formed:
			<br /><br />";
		@DateInput('DateFormed', $TheatreInfo['DateFormed']);
		echo"<br /><br />
				Type of theatre:
			<br /><br />";
		@DropDown('Type', $TypeOptions, $TheatreInfo['Type']);
		echo"<br /><br />
				<input type='submit' name='TheatreFormSubmitted' />
			</form>
		</div>";

	}
}

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
