<?php

if(isset ($_COOKIE["UsersName"])){

$script = $_SERVER['PHP_SELF'];
print<<<PROFILE

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
<link href="./Homepage.css" rel= "stylesheet">
<script src="./validatelogin.js" defer> </script>

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
<select id = "selector" name = "selector">
	<option value="Cards" id ="card-select" name ="card-select">Cards</option>
	<option value="Other" id ="Other-select" name ="Other-select">Other Collectables</option>
</select>
<input id = "search-input" name = "search-input" type = "text"/>
<input id = "search-button" name = "search-button" type = "submit" value = "Search"/>
</form>
</div>
<div class = "profiletbl">
<h1 style= "text-align:center;">Your Collection</h1>
<h2 style= "text-align:center;" id = 'currenttime'>Last Updated:</h2>
    
<script>

    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    document.getElementById("currenttime").innerHTML = "Last Updated: " + time

</script>


<h3 style = "text-align:center; border-top:1px solid black;"> Collection</h3>
<table>
<tr>
<td>Item</td>
<td>High Price</td>
<td>Low Price</td>
<td>Median Price</td>
<td>Product Link</td>
</tr>
PROFILE;

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

	echo "<form action=./Itempage.php method= POST>";
	echo "<tr>";
	echo "<td><input type= 'submit' name = $name value = '$item' /></td>";
	echo "<td>$row[highPrice]</td>";
	echo "<td>$row[lowPrice]</td>";
	echo "<td>$row[midPrice]</td>";
	echo "<td><a href=$row[productLink]>Link</a></td>";
	echo "</tr>";
	echo "</form>";
	$count = $count +1;
}

print<<<LOWPROFILE

</table>
</div>

</div>
</body>
</html>

LOWPROFILE;
}
else{

header("Location: ./Homepage.php");

}
?>