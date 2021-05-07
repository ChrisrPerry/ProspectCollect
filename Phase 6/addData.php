<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");

$server = "spring-2021.cs.utexas.edu";
$user = "cs329e_bulko_mike247";
$pwd = "union_Hearth4glance";
$dbName = "cs329e_bulko_mike247";

$mysqli = new mysqli($server, $user, $pwd, $dbName);

if($mysqli->connect_errno){
	die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
	
}

$mysqli->select_db($dbName) or die($mysqli->error);

$username = $_COOKIE['UsersName'];
$item = $_GET['item'];

$command = "SELECT item FROM $username WHERE item = '$item'";
$result = $mysqli->query($command);
$array = $result->fetch_array(MYSQLI_ASSOC);

if($array['item'] == $item){
	print("Item already in Collection");
}
else{
	$high = $_GET['high'];
	$low = $_GET['low'];
	$mid = $_GET['mid'];
	$image = $_GET['image'];
	$product = $_GET['prod'];

	$command = "INSERT INTO $username VALUES ('$item', '$high', '$low', '$mid', '$product', '$image')";
	$mysqli->query($command);

}

?>