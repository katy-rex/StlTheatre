<?php
include('config/init.php');

echo"
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
		<input type='submit' name='Submit' />
	</form>
";

if(isset($_REQUEST['Submit'])){
	if($_REQUEST['Color1'] == 'Red'){
		if($_REQUEST['Color2'] == 'Red'){
			$BackgroundColor = 'Red';
			ChangeBackground($BackgroundColor);
		}
		elseif($_REQUEST['Color2'] == 'Blue'){
			$BackgroundColor = 'Purple';
			ChangeBackground($BackgroundColor);
		}
		elseif($_REQUEST['Color2'] == 'Yellow'){
			$BackgroundColor = 'Orange';
			ChangeBackground($BackgroundColor);
		}
	}
	if($_REQUEST['Color1'] == 'Blue'){
		if($_REQUEST['Color2'] == 'Red'){
			$BackgroundColor = 'Purple';
			ChangeBackground($BackgroundColor);
		}
		elseif($_REQUEST['Color2'] == 'Blue'){
			$BackgroundColor = 'Blue';
			ChangeBackground($BackgroundColor);
		}
		elseif($_REQUEST['Color2'] == 'Yellow'){
			$BackgroundColor = 'Green';
			ChangeBackground($BackgroundColor);
		}
	}
	if($_REQUEST['Color1'] == 'Yellow'){
		if($_REQUEST['Color2'] == 'Red'){
			$BackgroundColor = 'Orange';
			ChangeBackground($BackgroundColor);
		}
		elseif($_REQUEST['Color2'] == 'Blue'){
			$BackgroundColor = 'Green';
			ChangeBackground($BackgroundColor);
		}
		elseif($_REQUEST['Color2'] == 'Yellow'){
			$BackgroundColor = 'Yellow';
			ChangeBackground($BackgroundColor);
		}
	}
}

function ChangeBackground($BackgroundColor) {
	echo'<body style="background-color:'.$BackgroundColor.'">
			<h2>
				You mix '.strtolower($_REQUEST['Color1']).' with '
				.strtolower($_REQUEST['Color2']).
				' you get '.strtolower($BackgroundColor).'!
			</h2>
		</body>';
}

?>
