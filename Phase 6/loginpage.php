<?php

error_reporting(E_ALL);
ini_set("display_errors", "on");

if(!isset($_COOKIE['UsersName'])){
$script = $_SERVER['PHP_SELF'];
print<<< LOGINPAGE
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./Homepage.css" rel= "stylesheet">
<script src="./validatelogin.js" defer> </script>
<title>Login Page</title>
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

<form name = 'logfrm' method = 'POST'>
<h2>Login</h2>
<table class = "logtable" >
<tr>
<td>Username:</td>
<td><input type ="text" id ="user" name= "user"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type = "password" id = "password" name = "password"></td>
          </tr>
</table>
<br><br><br>
<input  class = "loginbutton" id = "loginbutton" onclick = "validatelogin(this.form)" type = "button" value = "Submit"/>
</form>
    

<br><br>
   
<form name='regfrm' method = 'POST' action= $script>
<h2>Register</h2>
<table class = "logtable">
<tr>
<td>Username:</td>
<td><input type ="text" id ="userr" name= "userr"></td>
</tr>
<tr>
<td>Email:</td>
<td><input type = "email" id = "email" name = email></td>
</tr>
<tr>
<td>Password:</td>
<td><input type = "password" id = "password1" name = "password1"></td>
</tr>
<tr>
<td>Retype Password:</td>
<td><input type = "password" id = "password2" name = "password2"></td>
</tr>
</table>
<br><br><br>
<input type = "button" class = "loginbutton" id = "registerbutton" onclick = "validateregister(this.form)" value = "Submit">

</form>
</div>
</body>
</html>
LOGINPAGE;
}
else{
	header('Location: ./profile.php');
}
?>