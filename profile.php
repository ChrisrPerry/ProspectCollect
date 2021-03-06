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
<input id = "search-input" type = "text"/>
<input id = "search-button" type = "button" value = "Search"/>
</div>
<h1>Your Collection</h1>
<h2 id = 'currenttime'>Last Updated:</h2>
    
<script>

    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    document.getElementById("currenttime").innerHTML = "Last Updated: " + time

</script>

<div class = "profiletbl">
<table>
<tr>
<td>Product</td>
<td>Current Price</td>
<td>Total Gain $</td>
<td>Total Gain %</td>
</tr>
<tr>
<td>Item 1</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Item 2</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Item 3</td>
<td></td>
<td></td>
<td></td>
</tr>

</table>
</div>

</div>
</body>
</html>

PROFILE;
}
else{

header("Location: ./Homepage.php");

}
?>