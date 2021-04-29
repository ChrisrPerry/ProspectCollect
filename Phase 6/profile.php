<?php

if(isset ($_COOKIE["UsersName"])){
if(isset ($_POST['card'])){
echo $_POST['Item'];

}
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
<div class = "profiletbl">
<h1 style= "text-align:center;">Your Collection</h1>
<h2 style= "text-align:center;" id = 'currenttime'>Last Updated:</h2>
    
<script>

    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    document.getElementById("currenttime").innerHTML = "Last Updated: " + time

</script>


<h3 style = "text-align:center; border-top:1px solid black;"> Playing Cards </h3>
<table>
<tr>
<td>Item</td>
<td>High Price</td>
<td>Low Price</td>
<td>Median Price</td>
<td>Product Link</td>
</tr>

<form method = 'POST' action = './Itempage.php'>
<tr>
<td><input type= 'submit' name = 'card' value = 'Silver Legion'/></td>
<td>10.95</td>
<td>10.90</td>
<td>10.93</td>
<td><a href= 'https://shop.tcgplayer.com/magic/time-spiral-remastered/sliver-legion'>TCGplayer Website</a></td>
</tr>
<input type="text" hidden name= "Item" value = "Silver Legion"></p>
<input type="text"  hidden name = "highPrice" value = '$10.95'></p>
<input type="text"  hidden name = "lowPrice" value = '$10.90'></p>
<input type="text"  hidden name = "medianPrice" value = '$10.93'></p>
<input type="text"  hidden name = "productLink" value = "https://shop.tcgplayer.com/magic/time-spiral-remastered/sliver-legion"></p>
<input type="text"  hidden name = "imageLink" value = "https://tcgplayer-cdn.tcgplayer.com/product/234216_200w.jpg"></p>
</form>

<form method = 'POST' action = './Itempage.php'>
<tr>
<td id = "Item"><input type= 'submit' name = 'card' value = 'Charizard XY Prerelease'></td>
<td id = "highPrice">750.00</td>
<td id = "lowPrice">382.45</td>
<td id = "medianPrice">499.57</td>
<td id = "productLink"><a href= 'https://shop.tcgplayer.com/pokemon/xy-promos/charizard-xy-evolutions-prerelease'>TCGplayer Website</a></td>
</tr>
<input type="text" hidden name= "Item" value = "Charizard XY Prerelease"></p>
<input type="text"  hidden name = "highPrice" value = '$750.00'></p>
<input type="text"  hidden name = "lowPrice" value = '$382.45'></p>
<input type="text"  hidden name = "medianPrice" value = '$499.57'></p>
<input type="text"  hidden name = "productLink" value = "https://shop.tcgplayer.com/pokemon/xy-promos/charizard-xy-evolutions-prerelease"></p>
<input type="text"  hidden name = "imageLink" value = "https://tcgplayer-cdn.tcgplayer.com/product/126022_200w.jpg"></p>

</form>
<form method = 'POST' action = './Itempage.php'>
<tr>
<td id = "Item"><input type= 'submit' name = 'card' value = 'Dark Magician Dark Duel Stories'></td>
<td id = "highPrice">199.99</td>
<td id = "lowPrice">199.99</td>
<td id = "medianPrice">199.99</td>
<td id = "productLink"><a href= 'https://shop.tcgplayer.com/yugioh/yu-gi-oh-video-game-promotional-cards/dark-magician-dark-duel-stories'>TCGplayer Website</a></td>
</tr>
<input type="text" hidden name= "Item" value = "Dark Magician Dark Duel Stories"></p>
<input type="text"  hidden name = "highPrice" value = '$199.99'></p>
<input type="text"  hidden name = "lowPrice" value = '$199.99'></p>
<input type="text"  hidden name = "medianPrice" value = '$199.99'></p>
<input type="text"  hidden name = "productLink" value = "https://shop.tcgplayer.com/yugioh/yu-gi-oh-video-game-promotional-cards/dark-magician-dark-duel-stories"></p>
<input type="text"  hidden name = "imageLink" value = "https://tcgplayer-cdn.tcgplayer.com/product/22941_200w.jpg"></p>

</form>
</table>


<h3 style = "text-align:center; border-top:1px solid black;"> Apparel </h3>
<table>
<tr>
<td>Item</td>
<td>Last Sale Price</td>
<td>Product Link</td>
</tr>
<form method = 'POST' action = './Itempage.php>
<tr>
<td id = "Item"><input type= 'submit' name = 'apparel' value = 'Jordan 1 Retro High Tokyp Bio Hack'/></td>
<td id = "Price">289.00</td>
<td id = "productLink"><a href= 'https://stockx.com/air-jordan-1-retro-high-bio-hack'>StockX Website</a></td>
</tr>
<input type="text" hidden name= "Item" value = "Jordan 1 Retro High Tokyp Bio Hack"></p>
<input type="text"  hidden name = "highPrice" value = '$289.00'></p>
<input type="text"  hidden name = "productLink" value = 'https://stockx.com/air-jordan-1-retro-high-bio-hack'></p>
<input type="text"  hidden name = "imageLink" value = "https://images.stockx.com/360/Air-Jordan-1-Retro-High-Bio-Hack/Images/Air-Jordan-1-Retro-High-Bio-Hack/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1606318464&fit=clip&fm=webp&ixlib=react-9.0.3&w=798"></p>
</form>

<form method = 'POST' action = './Itempage.php>
<tr>
<td id = "Item"><input type= 'submit' name = 'apparel' value = 'Adidas Yeezy Boost 350 V2 Natural'/></td>
<td id = "Price">272.00</td>
<td id = "productLink"><a href= 'https://stockx.com/adidas-yeezy-boost-350-v2-natural'>StockX Website</a></td>
</tr>
<input type="text" hidden name= "Item" value = "Adidas Yeezy Boost 350 V2 Natural"></p>
<input type="text"  hidden name = "highPrice" value = '$272.00'></p>
<input type="text"  hidden name = "productLink" value = 'https://stockx.com/adidas-yeezy-boost-350-v2-natural'></p>
<input type="text"  hidden name = "imageLink" value = "https://images.stockx.com/360/adidas-Yeezy-Boost-350-V2-Natural/Images/adidas-Yeezy-Boost-350-V2-Natural/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1609349728&fit=clip&fm=webp&ixlib=react-9.0.3&w=1446"></p>


</form>
<form method = 'POST' action = './Itempage.php>
<tr>
<td id = "Item"><input type= 'submit' name = 'apparel' value = 'Juice Wrld x Vlone Butterfly T-Shirt'/></td>
<td id = "highPrice">61.00</td>
<td id = "productLink"><a href= 'https://stockx.com/juice-wrld-x-vlone-butterfly-t-shirt-white'>StockX Website</a></td>
</tr>

<input type="text" hidden name= "Item" value = "Juice Wrld x Vlone Butterfly T-Shirt"></p>
<input type="text"  hidden name = "highPrice" value = '$82.00'></p>
<input type="text"  hidden name = "productLink" value = 'https://stockx.com/juice-wrld-x-vlone-butterfly-t-shirt-white'></p>
<input type="text"  hidden name = "imageLink" value = "https://images.stockx.com/images/Juice-Wrld-x-Vlone-Butterfly-T-Shirt-White.png?fit=clip&bg=FFFFFF&h=500&auto=compress&q=90&dpr=2&trim=color&updated_at=1608068137&fm=webp&ixlib=react-9.0.3&w=1446"></p>


</form>

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