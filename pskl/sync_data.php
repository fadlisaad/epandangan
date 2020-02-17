<?php 
include_once("include/config.php");	
include_once("model/Pandangan.php");	

header("Content-type: text/json"); 


$formLastUpdate = $_GET['form_last_update'];
if (empty($formLastUpdate)) {
	/*
	echo json_encode(Array('error' => '404','message' => 'Invalid search type'));
	http_response_code(404);
	return;
	*/
	$formLastUpdate = "2020-01-01 00:00:00";
}

$itemLastUpdate = $_GET['item_last_update'];
if (empty($itemLastUpdate)) {
	/*
	echo json_encode(Array('error' => '404','message' => 'Invalid search type'));
	http_response_code(404);
	return;
	*/
	$itemLastUpdate = "2020-01-01 00:00:00";
}

$object=new Pandangan($dbHostname, $dbUsername, $dbPassword, $dbName);

$forms = $object->getNewForms($formLastUpdate); 
$items = $object->getNewItems($itemLastUpdate); 

// JSON
echo json_encode(Array('forms' => $forms, 'items' => $items));

return;

?>
