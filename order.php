<?php
$strhtml = '<!DOCTYPE html>'
?>
<html>
<head>
    <title>IWP PROJECT</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/order.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="assets/js/jquery.js"></script>
    <script>
function showItems(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("grid").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("grid").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getordermenu.php?q="+str, true);
  xhttp.send();
}

 function addCart(str){ 
  var xhttp;    
  if (str == "") {
    document.getElementById("msg").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("msg").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "addcart.php?q="+str, true);
  xhttp.send();
 }
</script>
</head>
<body>
<div class = "header" id="header">
    <a href="#default" class="logo">The Keating</a>
    <div class="header-right">
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="about.php">About</a>
        <a href="location.php">Location</a>
        <a class="active" href="order.php">Order Food</a>
        <a href="booking.php" id="book-btn">Book a Table</a>
    </div>
</div>
<!--BODY-->
<ul class = "menu-cat">
    <li><button class="cat" value = "starters" onclick="showItems(this.value)">Starters</button></li>
    <li><button class="cat" value = "maincourse" onclick="showItems(this.value)">Main Course</button></li>
    <li><button class="cat" value = "deserts" onclick="showItems(this.value)">Deserts</button></li>
    <li><button class="cat" value = "drinks" onclick="showItems(this.value)">Drinks</button></li>
    <li><a href="cart.php"><button class="cart">Cart</button></a></li>
</ul>


<!--START MENU-->

 <!-- menu -->
   <div class="grid" id="grid">
    <h3>Click on Category to order</h3>
    </div>
<div id="msg">
</div>
<!-- END MENU-->
<!--END BODY-->
<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>The Keating</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="location.php">Location</a></li>
      <li><a href="order.php">Order Food</a></li>
      <li><a href="booking.php">Book a table</a></li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->
</body>
</html>