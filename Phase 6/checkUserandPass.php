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

$check = $_GET['value'];
$username = $_GET['username'];
$password = $_GET['password'];

$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

$command = "SELECT * FROM weblogins WHERE userName = '$username'";
$result = $mysqli->query($command);
$array = $result->fetch_array(MYSQLI_ASSOC);

if($check == 'login'){

	if($array['passWord'] == $password && $array['userName'] == $username){
		setcookie("UsersName", $username, time()+3600*24*3, "/");
	}

	else{
		echo "<code>Incorrect Username or Pasword</code>";
	}

}
else{
	$email = $_GET['email'];
	if($array['userName'] == $username){
		echo "<code>Username already taken</code>";
	}
	else{
		$insert = "INSERT INTO weblogins VALUES ('$username', '$password', '$email')";
		$mysqli->query($insert);
		$profiledata = "CREATE TABLE $username (item VARCHAR(30), highPrice VARCHAR(10), lowPrice VARCHAR(10), midPrice VARCHAR(10), productLink VARCHAR(150), imageLink VARCHAR(150))";
		$mysqli->query($profiledata);
		setcookie("UsersName", $username, time()+3600*24*3, "/");
	}
}


?>