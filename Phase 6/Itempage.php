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
if(isset($_POST["card"])){
print<<< LOGGEDSEA
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
<input id = "search-input" type = "text"/>
<input id = "search-button" type = "button" onclick = "" value = "Search"/>
</div>

<div id = "itemData">
<h2 id = 'searchItem'>{$_POST['Item']}</h1>
<img id = 'searchItemImage' src= {$_POST['imageLink']}
<br>
<h3 id = 'searchItemHighPrice'>High Price: {$_POST['highPrice']}</h3>
<h3 id = 'searchItemLowPrice'>Low Price: {$_POST['lowPrice']}</h3>
<h3 id = 'searchItemMedianPrice'>Median Price: {$_POST['medianPrice']}</h3>
<a id = 'searchItemProductLink' href = {$_POST['productLink']}>Product Page</a>
</div>

</div>
</div>
</body>
</html>
LOGGEDSEA;
}
else{

print<<< LOGGEDSEA
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
<input id = "search-input" type = "text"/>
<input id = "search-button" type = "button" onclick = "" value = "Search"/>
</div>

<div id = "itemData">
<h2 id = 'searchItem'>{$_POST['Item']}</h1>
<img id = 'searchItemImage' src= {$_POST['imageLink']}
<br>
<h3 id = 'searchItemHighPrice'>Last Bought Price: {$_POST['highPrice']}</h3>
<a id = 'searchItemProductLink' href = {$_POST['productLink']}>Product Page</a>
</div>

</div>
</div>
</body>
</html>
LOGGEDSEA;

}

}
    

?>