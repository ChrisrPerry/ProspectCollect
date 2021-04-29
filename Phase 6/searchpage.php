<?php

if(isset($_COOKIE["UsersName"])){
    loggedSearch();
}
else{
    search();
}

function loggedSearch(){

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
<script>
	function callproxy(){
		item = document.getElementById("search-input").value;
		var fetchURL = './proxy.php?https://api.tcgplayer.com/v1.39.0/catalog/products?productName=Sliver Legion';
	 	$.ajax({
			method: "GET",
			url: fetchURL,
			headers: {Accept: 'application/json', User_Agent: '388706fd', Authorization: 'bearer enoM9gqAONT2sjJowPFv7wlnBw5eXCK_h9hp4MqVe1f0Se9TA0K2OmLKYcChBy_eqgJBjjv_9kjZGAg7ogDhA_d6jyqp8O3kFxczUA6W8ArR7diqQPIDlHBLQV1REkDfpwi4zHKElTZWRLO109_bHZY_oIdDWufStoJIrd1kRZI74K3y4rvOiZJuyAkZF6MIjjsH06MuL8bdbW0JXy3gsQt-rj3HXJXTXIB3ocIRIKQkKF1o9f7eccjtS5tS1sPMB9emh9_4_bESA7TD9zUL1kbSUWFtIPsxH5CGoJvUwXM2sfQOLAHlFzsXMhZi8XZiKOPv8g'}
             	})
			.done(function(response) {
				console.log(response);
		});
	}
</script>

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
<input id = "search-input" type = "text"/>
<input id = "search-button" type = "button" onclick = "callproxy()" value = "Search"/>
</div>
<h2 id = "searchItem"></h1>
<img id = "searchItemImage" src= '' />
<h3 id = "searchItemHighPrice"></h3>
<h3 id = "searchItemLowPrice"></h3>
<h3 id = "searchItemMedianPrice"></h3>
<a id = "searchItemProductLink></a>
<button style="display:none;" id = "addtocollection" onclick = "addtoCollection()" value = "Add to collection" />

<img href='./image2.jpg'/>
<img href = './image3.jpg'/>

</div>
</body>
</html>
LOGGEDSEA;



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