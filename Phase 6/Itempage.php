<?php

error_reporting(E_ALL);
ini_set("display_errors", "on");


if(isset($_COOKIE["UsersName"])){
    loggedItem();
}
else{
    header("location: ./profile.php");
}

function loggedItem(){

print<<< LOGGEDSEAR
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./Homepage.css" rel= "stylesheet">
<script src="validatelogin.js" defer> </script>


<title>Item Page</title>
</head>
<body>
<div id="container">
<div id="header">
<img class="logo" src="./image1.jpg" alt="Logo">
<h1>Prospectors & Collectors</h1>
</div>

<div id="navbar">
<ul>
<li><a href="./Homepage.php">Home</a></li>
<li><a href="./profile.php">Profile</a></li>
<li><a href="./searchpage.php">Search</a></li>
<li><a href="javascript:logout()">Logout</a></li>
<li style="border-bottom: 1px solid black"><a href="./contactus.php">About Us</a></li>
</ul>
</div>
<div id="search-bar">
<form action= './searchpage.php' method='POST'>
<input id = "search-input" name = "search-input" type = "text"/>
<input id = "search-button" name = "search-button" type = "submit" value = "Search"/>
</form>
</div>

<div id = "itemData">
LOGGEDSEAR;

$server = "spring-2021.cs.utexas.edu";
$user = "cs329e_bulko_mike247";
$pwd = "union_Hearth4glance";
$dbName = "cs329e_bulko_mike247";

$mysqli = new mysqli($server, $user, $pwd, $dbName);

if($mysqli->connect_errno){
	die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
	
}

$mysqli->select_db($dbName) or die($mysqli->error);

$user = $_COOKIE['UsersName'];

$command = "SELECT * FROM $user";
$result = $mysqli->query($command);
$count = 0;
while($row = $result->fetch_array()){
	$item = $row['item'];
	$name = "form{$count}";
	if(isset($_POST[$name])){
		echo "<h2>$item</h2>";
		echo "<img style='max-width:400px;' src='$row[imageLink]'>";
		echo "<h3>High Price: $row[highPrice]</h3>";
		echo "<h3>Low Price: $row[lowPrice]</h3>";
		echo "<h3>Median Price: $row[midPrice]</h3>";
		echo "<a href= $row[productLink]>Product Page</a>";
	}
	$count = $count + 1;

}

print<<< LOGGEDSEA
</div>

</div>
</div>
</body>
</html>
LOGGEDSEA;
}
    

?>