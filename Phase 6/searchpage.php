<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./Homepage.css" rel= "stylesheet">
<script src="validatelogin.js" defer> </script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<title>Search Page</title>
</head>
<body>
<script language = "javascript" type = "text/javascript">
	function addtoCollection(data){
		var ajaxRequest;
		ajaxRequest = new XMLHttpRequest();
		
		ajaxRequest.onreadystatechange = function(){
			if(ajaxRequest.readyState == 4){
				console.log(ajaxRequest.response);
				if(ajaxRequest.response != ''){
					alert(ajaxRequest.response);	
				}		
			}
		}
		var item = data.searchItem.value;
		var highPrice = data.searchItemHighPrice.value;
		var lowPrice = data.searchItemLowPrice.value;
		var midPrice = data.searchItemMedianPrice.value;
		var imagelink = data.searchItemImage.value;
		var prodlink = data.searchItemProductLink.value;
		data.addtocollection.style.visibility = "hidden";
		var queryString = "?item=" + item + "&high=" + highPrice + "&low=" + lowPrice + "&mid=" + midPrice + "&image=" + imagelink + "&prod=" + prodlink;
		ajaxRequest.open("GET", "./addData.php" + queryString, true);
		ajaxRequest.send(null);

	}

</script>


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

print<<< LOGGEDSEA
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
<li><a href= "./validCards.php">Valid Cards</a></li>
</ul>
</div>
<div class="search-bar">
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
LOGGEDSEA;


if(isset($_POST['search-button'])){

$file = fopen('./searchItem.txt', 'w');
fwrite($file, $_POST['search-input']);
fclose($file);

if($_POST['selector'] == 'Cards'){
$data = (shell_exec("/usr/bin/python3 ./searchFunction.py"));

$datalist = explode(" ", $data, 7);
if(trim($datalist[0]) == 'true'){

$high = "$" . $datalist[3];
$low = "$" . $datalist[4];
$mid = "$" . $datalist[5];

echo "<h2>{$_POST['search-input']}</h1>";
echo "<img src= {$datalist[1]} />";
if(trim($datalist[2]) == 'true'){
echo "<h3>High Price: {$high}</h3>";
echo "<h3>Low Price: {$low}</h3>";
echo "<h3>Mid Price: {$mid}</h3>";
}
else{
echo "<h3>No Price Available with TCG API</h3>";
echo "<h3>No Price Available with TCG API</h3>";
echo "<h3>No Price Available with TCG API</h3>";
}
echo "<a href = {$datalist[6]}>Product Link</a><br><br>";
echo "<form method='post' action='javascript:void(0);'>";
echo "<input type = 'hidden' id = 'searchItem' value = '{$_POST['search-input']}'></input>";
echo "<input type = 'hidden' id = 'searchItemImage' value = {$datalist[1]} ></input>";
echo "<input type = 'hidden' id = 'searchItemHighPrice' value = {$high}></input>";
echo "<input type = 'hidden' id = 'searchItemLowPrice' value = {$low}></input>";
echo "<input type = 'hidden' id = 'searchItemMedianPrice' value = {$mid}></input>";
echo "<input type = 'hidden' id = 'searchItemProductLink' value = {$datalist[6]}></input>";

echo "<input type= 'submit' id = 'addtocollection' onclick = 'addtoCollection(this.form)' value ='Add to collection'></input><br><br>";
echo "</form>";
}
else{
echo "<h2>Please Input Valid Card From TCGplayer.</h2>";
}
}

else{


echo "Need ebay code";




}

}
echo "</div></div></body></html>";	
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
<li><a href= "./validCards.php">Valid Cards</a></li>
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
SEARCH;


if(isset($_POST['search-button'])){

$file = fopen('./searchItem.txt', 'w');
fwrite($file, $_POST['search-input']);
fclose($file);

$data = (shell_exec("/usr/bin/python3 ./searchFunction.py"));

$datalist = explode(" ", $data, 7);
if(trim($datalist[0]) == 'true'){

$high = "$" . $datalist[3];
$low = "$" . $datalist[4];
$mid = "$" . $datalist[5];

echo "<h2>{$_POST['search-input']}</h1>";
echo "<img src= {$datalist[1]} />";
if(trim($datalist[2]) == 'true'){
echo "<h3>High Price: {$high}</h3>";
echo "<h3>Low Price: {$low}</h3>";
echo "<h3>Mid Price: {$mid}</h3>";
}
else{
echo "<h3>No Price Available with TCG API</h3>";
echo "<h3>No Price Available with TCG API</h3>";
echo "<h3>No Price Available with TCG API</h3>";
}
echo "<a href = {$datalist[6]}>Product Link</a><br><br>";

}
else{
echo "<h2>Please Input Valid Card From TCGplayer.</h2>";
}

}
echo "</div></div></body></html>";	
}


?>