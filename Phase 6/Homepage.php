<?php

if(isset ($_COOKIE["UsersName"])){
	loggedInHomepage();
}
else{
	Homepage();
}

function Homepage()
{
$script = $_SERVER['PHP_SELF'];
print<<< HOMEPAGE

<!DOCTYPE html>

<html lang="en">

<head>
<title>Propspectors & Collectors</title>
<meta charset="UTF-8">
<meta name="description" content="CS 329E Project">
<meta name="author" content="Omar Daher, Christopher Perry, Michael Sams, Marissa Vera">
<link href="./Homepage.css" rel= "stylesheet">
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
<form action= './searchpage.php' method='POST'>
<select id = "selector" name = "selector">
	<option value="Cards" id ="card-select" name ="card-select">Cards</option>
	<option value="Other" id ="Other-select" name ="Other-select">Other Collectables</option>
</select>
<input id = "search-input" name = "search-input" type = "text"/>
<input id = "search-button" name = "search-button" type = "submit" value = "Search"/>
</form>
</div>

<div id="content">
<div id = "box">
<h3>Build Your Collection!</h3>
<p>Prospectors & Collectors allows you to add a variety of items to your collection and track their current valuation.</p> 
</div>
<div id="getStartedButton">
<a href="./loginpage.php">Get Started</a>
</div>

</div>

<h3 style="text-align:center;">Add your playing cards and your lucrative apparel to your collection!</h3>
<div width = 320 style="margin: 0 auto;">
<video width = "320" controls style="border:2px solid black; margin: 0 auto;display:block">
	<source src="IMG_3045.mp4" type= "video/mp4">
	<source src="IMG_3045.ogg" type= "video/ogg">
	Your browser does not support the video tag.
</video>
</div>

<div id="footer">
<h3>Omar Daher | Christopher Perry | Michael Sams | Marissa Vera ~ Last Updated: 05/07/2021</h3>
</div>

</div>
</body>

</html>
HOMEPAGE;
}

function loggedInHomepage(){

$script = $_SERVER['PHP_SELF'];
print<<< HOMEPAGE
<!DOCTYPE html>

<html lang="en">

<head>
<title>Propspectors & Collectors</title>
<meta charset="UTF-8">
<meta name="description" content="CS 329E Project">
<meta name="author" content="Omar Daher, Christopher Perry, Michael Sams, Marissa Vera">
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

<div id= "images">
<h3>Add your playing cards and your lucrative apparel to your collection!</h3>
<img style = "float:right" class="homeImg" src="./cards.png" alt="Cards">
<img style = "float:left" class="homeImg" src="./shoes.png" alt="Shoes">
</div>

<div id="footer">
<h3>Omar Daher | Christopher Perry | Michael Sams | Marissa Vera ~ Last Updated: 05/07/2021</h3>
</div>

</div>
</body>

</html>
HOMEPAGE;

}

?>