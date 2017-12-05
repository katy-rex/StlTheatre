<?php
include('config/init.php');


echo "
	<form action='' method='get'>
		<input type='text' name='Variable1' />
		<input type='text' name='Variable2' />
		<select name='Functions'>
			<option value='Add'>
			Add
			</option>
			<option value='Subtract'>
			Subtract
			</option>
			<option value='Multiply'>
			Multiply
			</option>
			<option value='Divide'>
			Divide
			</option>
		</select>
		<input type='submit' />
	</form>
";

// var_dump($_REQUEST);

if(isset($_REQUEST['Variable1'])){
	if($_REQUEST['Functions'] == 'Add'){
		echo"<h2>The answer is ".
		Add($_REQUEST['Variable1'],$_REQUEST['Variable2']).
		"</h2>";
	}
	else if($_REQUEST['Functions'] == 'Subtract'){
		echo"<h2>The answer is ".
		Subtract($_REQUEST['Variable1'],$_REQUEST['Variable2']).
		"</h2>";
	}
	else if($_REQUEST['Functions'] == 'Multiply'){
		echo"<h2>The answer is ".
		Multiply($_REQUEST['Variable1'],$_REQUEST['Variable2']).
		"</h2>";
	}
	else if($_REQUEST['Functions'] == 'Divide'){
		echo"<h2>The answer is ".
		Divide($_REQUEST['Variable1'],$_REQUEST['Variable2']).
		"</h2>";
	}
}

function Add($Var1, $Var2){
	return $Var1+$Var2;
}

function Subtract($Var1, $Var2){
	return $Var1-$Var2;
}

function Multiply($Var1, $Var2){
	return $Var1*$Var2;
}

function Divide($Var1, $Var2){
	return $Var1/$Var2;
}
