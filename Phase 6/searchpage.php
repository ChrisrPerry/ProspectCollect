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

$data = (shell_exec("/usr/bin/python3 ./searchFunction.py"));
$datalist = explode(" ", $data, 7);

if(trim($datalist[0]) == 'true'){

$high = "High Price: $" . $datalist[3];
$low = "Low Price: $" . $datalist[4];
$mid = "Mid Price: $" . $datalist[5];
echo "<h2 id = 'searchItem'>{$_POST['search-input']}</h1>";
echo "<img id = 'searchItemImage' src= {$datalist[1]} />";
if(trim($datalist[2]) == 'true'){
echo "<h3 id = 'searchItemHighPrice'>{$high}</h3>";
echo "<h3 id = 'searchItemLowPrice'>{$low}</h3>";
echo "<h3 id = 'searchItemMedianPrice'>{$mid}</h3>";
}
else{
echo "<h3 id = 'searchItemHighPrice'>No Price Available with TCG API</h3>";
echo "<h3 id = 'searchItemLowPrice'>No Price Available with TCG API</h3>";
echo "<h3 id = 'searchItemMedianPrice'>No Price Available with TCG API</h3>";
}
echo "<a style='text-align:center;' id = 'searchItemProductLink' href = {$datalist[6]}>Product Link</a><br><br>";
echo "<button id = 'addtocollection'  onclick = 'addtoCollection()'>Add to collection</button><br><br>";
}
else{
echo "<h2>Please Input Valid Card From TCGplayer.</h2>";
}
}
echo "</div></div></body></html>";	

}
    
function search(){

$script = $_SERVER['PHP_SELF'];
print<<< SEARCH
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./Homepage.css" rel= "stylesheet">
<script src="validatelogin.js" defer> </script>
<title>Search Page</title>
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
<li><a href="./loginpage.php">Log In</a></li>
<li><a href="./searchpage.php">Search</a></li>
<li style="border-bottom: 1px solid black"><a href="./contactus.php">About Us</a></li>
</ul>
</div>
<div id="search-bar">
<input id = "search-input" type = "text"/>
<input id = "search-button" type = "button" value = "Search"/>
</div>
<img href='./image2.jpg'/>
<img href = './image3.jpg'/>

SEARCH;

}

?>