<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./Homepage.css" rel= "stylesheet">
<script src="validatelogin.js" defer> </script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<title>Valid Cards</title>
</head>
<body>

<?php

error_reporting(E_ALL);
ini_set("display_errors", "on");

if(isset($_COOKIE["UsersName"])){
loggedSearch();
}
else{
search();
}

function loggedSearch(){
$script = $_SERVER['PHP_SELF'];

print<<< LOGGEDIN
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
<form action=$script method='POST'>
<select id = "selector" name = "selector">
	<option value="Cards" id ="card-select" name ="card-select">Cards</option>
	<option value="Other" id ="Other-select" name ="Other-select">Other Collectables</option>
</select>
<input id = "search-input" name = "search-input" type = "text"/>
<input id = "search-button" name = "search-button" type = "submit" value = "Search"/>
</form>
</div>
<div id = "itemData">
<h2>Valid Cards</h2>
<h3>Cards may have different prices than on the product website because the API is out of date</h3>
<table style='margin-left:auto; margin-right:auto;border:1px solid black;'>
<tr>
<td width = "25%">Hyozanryu</td>
<td width = "25%">Eevee</td>
<td width = "25%">Sliver Legion</td>
</tr>
<tr>
<td>Mask Change</td>
<td>Salvage</td>
<td>Metalfoes Volflame</td>
</tr>
<tr>
<td>Armed Dragon LV10</td>
<td>Gigantes</td>
<td>Pikachu</td>
</tr>
<tr>
<td>Lightning Bolt</td>
<td>Oddish</td>
<td>Venonat</td>
</tr>
<tr>
<td>Meowth</td>
<td>Marill</td>
<td>Bellsprout</td>
</tr>
<tr>
<td>Zubat</td>
<td>Ingot Chewer</td>
<td>Darksteel Ingot</td>
</tr>
<tr>
<td>Frantic Search</td>
<td>Simian Spirit Guide</td>
<td>Lotus Petal</td>
</tr>
<tr>
<td>Terminate</td>
<td>Virulent Sliver</td>
<td>Hull Breach</td>
</tr>
<tr>
<td>Mana Leak</td>
<td>Dark Magician Girl</td>
<td>Gate Guardian</td>
</tr>
<tr>
<td>Gatling Dragon</td>
<td>Rescue Cat</td>
<td>King of the Skull Servants</td>
</tr>
</table>

</div>
</div>
</body>
</html>
LOGGEDIN;
}

function search(){

$script = $_SERVER['PHP_SELF'];
print<<< SEARCH

<div id="container">
<div id="header">
<img class="logo" src="./image1.jpg" alt="Logo">
<h1>Prospectors & Collectors</h1>
</div>

<div id="navbar">
<ul>
<li><a href="./Homepage.php">Home</a></li>
<li><a href="./loginpage.php">Log In</a></li>
<li><a href="./searchpage.php">Search</a></li>
<li style="border-bottom: 1px solid black"><a href="./contactus.php">About Us</a></li>
</ul>
</div>
<div id="search-bar">
<form action=$script method='POST'>
<select id = "selector" name = "selector">
	<option value="Cards" id ="card-select" name ="card-select">Cards</option>
	<option value="Other" id ="Other-select" name ="Other-select">Other Collectables</option>
</select>
<input id = "search-input" name = "search-input" type = "text"/>
<input id = "search-button" name = "search-button" type = "submit" value = "Search"/>
</form>
</div>
<div id = "itemData">
<h2>Valid Cards</h2>
<h3>Cards may have different prices than on the product website because the API is out of date</h3>
<table style='margin-left:auto; margin-right:auto;border:1px solid black;'>
<tr>
<td>Hyozanryu</td>
<td>Eevee</td>
<td>Sliver Legion</td>
</tr>
<tr>
<td>Mask Change</td>
<td>Salvage</td>
<td>Metalfoes Volflame</td>
</tr>
<tr>
<td>Armed Dragon LV10</td>
<td>Gigantes</td>
<td>Pikachu</td>
</tr>
<tr>
<td>Lightning Bolt</td>
<td>Oddish</td>
<td>Venonat</td>
</tr>
<tr>
<td>Meowth</td>
<td>Marill</td>
<td>Bellsprout</td>
</tr>
<tr>
<td>Zubat</td>
<td>Ingot Chewer</td>
<td>Darksteel Ingot</td>
</tr>
<tr>
<td>Frantic Search</td>
<td>Simian Spirit Guide</td>
<td>Lotus Petal</td>
</tr>
<tr>
<td>Terminate</td>
<td>Virulent Sliver</td>
<td>Hull Breach</td>
</tr>
<tr>
<td>Mana Leak</td>
<td>Dark Magician Girl</td>
<td>Gate Guardian</td>
</tr>
<tr>
<td>Gatling Dragon</td>
<td>Rescue Cat</td>
<td>King of the Skull Servants</td>
</tr>
</table>

</div>
</div>
</body>
</html>

SEARCH;
}