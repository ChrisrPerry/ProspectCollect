<?php

if(isset ($_COOKIE["UsersName"])){
  loggedContact();
}
else{
  contact();
}

function contact(){
$script = $_SERVER['PHP_SELF'];

print<<<CONTACT
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./Homepage.css" rel= "stylesheet">
<title>Contact Us!</title>
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
<div class="search-bar">
<form action= './searchpage.php' method='POST'>
<input id = "search-input" name = "search-input" type = "text"/>
<input id = "search-button" name = "search-button" type = "submit" value = "Search"/>
</form>
</div>

<div class="members">
<h1>Meet the Team!</h1>
<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Omar Daher</h2>
<p>Senior at UT Austin majoring in Biochemistry with an Elements of Computing certificate
</p>
<p class = "addspace">Email: <a href="mailto:omar.daher@utexas.edu">omar.daher@utexas.edu</a>
</p>
</div>
</div>
</div>

<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Christopher Perry</h2>
<p>Senior at UT Austin majoring in Philosophy with an Elements of Computing certificate. Here is a
<a href="https://itch.io/jam/cs-329e-f20/rate/843143">link to a web game I was apart of making.</a>
</p>
<p class = "addspace">
Email: <a href="mailto:crp2964@utexas.edu">crp2964@utexas.edu</a>
</p>
</div>
</div>
</div>

<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Michael Sams</h2>
<p>
Sophomore at UT Austin majoring in Mechanical Engineering with an Elements of Computing certificate
</p>
<p id = "addspace">
Email: <a href="mailto:michaelsams@utexas.edu">michaelsams@utexas.edu</a>
</p>
</div>
</div>
</div>

<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Marissa Vera</h2>
<p>
Senior at UT Austin majoring in Biochemistry with an Elements of Computing certificate
</p>
<p class = "addspace">
Email: <a href="mailto:marissavera@utexas.edu">marissavera@utexas.edu</a>
</p>
</div>
</div>
</div>

</div>
</div>
</body>
</html>
CONTACT;
}

function loggedContact(){

print<<<LOGGEDCONTACT
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./Homepage.css" rel= "stylesheet">
<script src="./validatelogin.js" defer> </script>
<title>Contact Us!</title>
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
<div class="search-bar">
<form action= './searchpage.php' method='POST'>
<input id = "search-input" name = "search-input" type = "text"/>
<input id = "search-button" name = "search-button" type = "submit" value = "Search"/>
</form>
</div>

<div class="members">
<h1>Meet the Team!</h1>
<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Omar Daher</h2>
<p>Senior at UT Austin majoring in Biochemistry with an Elements of Computing certificate
</p>
<p class = "addspace">Email: <a href="mailto:omar.daher@utexas.edu">omar.daher@utexas.edu</a>
</p>
</div>
</div>
</div>

<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Christopher Perry</h2>
<p>Senior at UT Austin majoring in Philosophy with an Elements of Computing certificate. Here is a
<a href="https://itch.io/jam/cs-329e-f20/rate/843143">link to a web game I was apart of making.</a>
</p>
<p class = "addspace">
Email: <a href="mailto:crp2964@utexas.edu">crp2964@utexas.edu</a>
</p>
</div>
</div>
</div>

<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Michael Sams</h2>
<p>
Sophomore at UT Austin majoring in Mechanical Engineering with an Elements of Computing certificate
</p>
<p id = "addspace">
Email: <a href="mailto:michaelsams@utexas.edu">michaelsams@utexas.edu</a>
</p>
</div>
</div>
</div>

<div class="member">
<div class="memberBio">
<div class="cont">
<h2>Marissa Vera</h2>
<p>
Senior at UT Austin majoring in Biochemistry with an Elements of Computing certificate
</p>
<p class = "addspace">
Email: <a href="mailto:marissavera@utexas.edu">marissavera@utexas.edu</a>
</p>
</div>
</div>
</div>

</div>
</div>
</body>
</html>
LOGGEDCONTACT;

}
?>