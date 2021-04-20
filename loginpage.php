<?php

error_reporting(E_ALL);
ini_set("display_errors", "on");

if(isset($_POST["user"]) && isset($_POST["password"]) && $_POST["user"] != "" && $_POST["password"] != ""){
  $file = fopen("./logins.txt", "r");
  $check = 0;
  $newstr = "{$_POST['user']}:{$_POST['password']}";
  echo $newstr;
  $length = strlen($newstr);
  while (!feof($file)){

    $line = trim(fgets($file));
    $loginUser = substr($line,0,$length);
    echo $loginUser;
    if($loginUser == $newstr){
      $check = 1;
      break;
    }
  }

  fclose($file);
  if($check == 1){
    setcookie("UsersName", $_POST["user"], time()+3600*24*30, "/");
    header("Location: ./profile.php");
  }
  else{
    echo "<script>alert('Wrong username or password')</script>";
  }
}

elseif(isset($_POST["userr"]) && isset($_POST["password1"]) && $_POST["userr"] != "" && $_POST["password1"] != "" && isset($_POST["password2"]) && $_POST["password2"] != ""){
  $file = fopen("./logins.txt", "r");
  $taken = False;
  while (!feof($file)){
    $line = fgets($file);
    $userlen = strlen($_POST["userr"]);
    if($_POST["userr"] == substr($line,0,$userlen) && substr($line, $userlen,1) == ':'){
      echo "<script>alert('Username is already taken')</script>";
      $taken = True;
      break;
    }
  }
  fclose($file);
  
  if($taken == False){
    $file = fopen("./logins.txt", "a");
    fwrite($file, "{$_POST['userr']}:{$_POST['password1']}:{$_POST['email']}\n");
    fclose($file);
    setcookie("UsersName", $_POST["userr"], time()+3600*24*30, "/");
    header("Location: ./profile.php");
  }

}

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

<form name = 'logfrm' method = 'POST' action = '$script'>
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
   
<form name='regfrm' method = 'POST' action = '$script'>
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
?>