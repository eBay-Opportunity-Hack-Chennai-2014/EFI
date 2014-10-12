<?php

require_once "commonutilities.php";

global $db;

$stmt = $db->query("SELECT * FROM `user_uploads` ORDER BY created DESC limit 10");

$returnData = array();
while ($res = $stmt->fetch(PDO::FETCH_OBJ)) {
	$obj = new StdClass();
	$obj->id = $res->id;
	$obj->desc = $res->description;
	$obj->title = $res->title;
	$obj->img = "http://localhost/efi/from_scratch/" . str_replace("\\", "/", $res->img);
	$obj->likes = rand(50,80);
	$obj->shares = rand(10,24);
	$obj->comments = rand(20,35);
	array_push($returnData, $obj);
}
header("Content-type: application/json");
print_r(json_encode($returnData));

?>;