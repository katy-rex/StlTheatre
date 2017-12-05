<?php
include('config/init.php');


echo "
	<form action='' method='get'>
		<select name='Color1'>
			<option value='Red'>
			Red
			</option>
			<option value='Blue'>
			Blue
			</option>
			<option value='Yellow'>
			Yellow
			</option>
		</select>
		+
		<select name='Color2'>
			<option value='Red'>
			Red
			</option>
			<option value='Blue'>
			Blue
			</option>
			<option value='Yellow'>
			Yellow
			</option>
		</select>
		<input type='submit' name='submit' />
	</form>
";

// var_dump($_REQUEST);

if(isset($_REQUEST['submit'])){
	if($_REQUEST['Color1'] == 'Red'){
		if($_REQUEST['Color2'] == 'Red'){
			echo'<body style="background-color:red">
				<h2>You mix red with red, you get red!</h2>';
		}
		elseif($_REQUEST['Color2'] == 'Blue'){
			echo'<body style="background-color:purple">
			<h2>You mix red with blue, you get purple!</h2>';
		}
		elseif($_REQUEST['Color2'] == 'Yellow'){
			echo'<body style="background-color:orange">
			<h2>You mix red with yellow, you get orange!</h2>';
		}
	}
	if($_REQUEST['Color1'] == 'Blue'){
		if($_REQUEST['Color2'] == 'Red'){
			echo'<body style="background-color:purple">
				<h2>You mix blue with red, you get purple!</h2>';
		}
		elseif($_REQUEST['Color2'] == 'Blue'){
			echo'<body style="background-color:blue">
			<h2>You mix blue with blue, you get blue!</h2>';
		}
		elseif($_REQUEST['Color2'] == 'Yellow'){
			echo'<body style="background-color:green">
			<h2>You mix blue with yellow, you get green!</h2>';
		}
	}
	if($_REQUEST['Color1'] == 'Yellow'){
		if($_REQUEST['Color2'] == 'Red'){
			echo'<body style="background-color:orange">
				<h2>You mix yellow with red, you get orange!</h2>';
		}
		elseif($_REQUEST['Color2'] == 'Blue'){
			echo'<body style="background-color:green">
			<h2>You mix yellow with blue, you get green!</h2>';
		}
		elseif($_REQUEST['Color2'] == 'Yellow'){
			echo'<body style="background-color:yellow">
			<h2>You mix yellow with yellow, you get yellow!</h2>';
		}
	}
}
