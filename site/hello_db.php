<?php
include('init.php');

//$result =

function GetInventory($result){
	return dbQuery("
	SELECT *
	FROM inventory
	WHERE InventoryId = :InventoryId",
	array(":InventoryId"=>$result));
}

$DBResult = GetInventory(3)->fetch();
echo $DBResult['Category'];

// $Category = function GetInventoryName($Name){
// 	return dbQuery("
// 	SELECT 'Category'
// 	FROM inventory
// 	WHERE InventoryId = :InventoryId",
// 	array(":InventoryId"=>$Name));
// }

//echo"<h1>".$Category['Category']->fetch()."</h1>";

//echo'<h1>'.GetInventory(3["Name"]).'</h1>';


	//->fetch();

//echo "<h1>".$result['MessageBody']."</h1>";
