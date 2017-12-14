<?php
include_once('init.php');
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

if(isset($_REQUEST['EditTheatreSubmitted'])){
	if(!@$_REQUEST['EditTheatre']){
		$FormErrors['EditTheatre'] = "Please enter a theatre to edit.";
	}
	if(sizeof($FormErrors) == 0){
		$TheatreInfo = GetTheatre($_REQUEST['EditTheatre']);
		//echo"".$TheatreInfo['Email']."";
		//var_dump($TheatreInfo);
		foreach($TheatreInfo as $Row){
			echo"<div class='ContactForm'>
				<h3>Edit the theatre information here:</h3>
				<br />
				<form action='' method='post'>
				Theatre Id:
			<br /><br />";
			@ReadOnlyTextBox($Row['TheatreId'], 'TheatreId');
			echo"<br /><br />
					Theatre Name:
				<br /><br />";
			@EditTextBox($Row['TheatreName'], 'TheatreName');
			echo"<br /><br />
					Theatre Description:
				<br /><br />";
			@EditTextArea($Row['TheatreDescription'], 'TheatreDescription');
			echo"<br /><br />
					Email:
				<br /><br />";
			@EditTextBox($Row['Email'], 'Email');
			echo"<br /><br />
					Street Address:
				<br /><br />";
			@EditTextBox($Row['StreetAddress'], 'StreetAddress');
			echo"<br /><br />
					City:
				<br /><br />";
			@EditTextBox($Row['City'], 'City');
			echo"<br /><br />
					State:
				<br /><br />";
			@EditDropDown($Row['State'], 'State', 'Missouri', 'Illinois');
			echo"<br /><br />
					Zip:
				<br /><br />";
			@EditTextBox($Row['Zip'], 'Zip');
			echo"<br /><br />
					Website:
				<br /><br />";
			@EditTextBox($Row['Website'], 'Website');
			echo"<br /><br />
					Date Formed:
				<br /><br />";
			@EditDateInput($Row['DateFormed'], 'DateFormed');
			echo"<br /><br />
					Type of theatre:
				<br /><br />";
			@EditDropDown($Row['Type'],'Type', 'Equity', 'SPT', 'Non-Equity',
			'Community');
			echo"<br /><br />
					<input type='submit' name='TheatreFormSubmitted' />
				</form>
				</div>";
		}
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
	if(!@$_REQUEST['Email'] || strpos($_REQUEST['Email'], '@') == false){
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
	if(!@$_REQUEST['Website'] || strpos($_REQUEST['Website'], '.') == false){
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



function UpdateForm($TheatreId, $TheatreName, $TheatreDescription, $Email,
	$StreetAddress, $City, $State, $Zip, $Website, $DateFormed, $Type){
	//echo"hi";
	return dbQuery("
	UPDATE theatrelist
	SET TheatreName = '$TheatreName',
	TheatreDescription = '$TheatreDescription', Email = '$Email',
	StreetAddress = '$StreetAddress', City = '$City', State = '$State',
	Zip = '$Zip', Website = '$Website', DateFormed = '$DateFormed',
	Type = '$Type'
	WHERE TheatreId = '$TheatreId'
	")
	->execute();
}

function GetTheatre($TheatreName){
	return dbQuery("
	SELECT *
	FROM theatrelist
	WHERE TheatreName='$TheatreName'")
	->fetchAll();
}

PrintFooter();
?>
